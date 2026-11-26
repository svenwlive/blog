<?php

use App\Models\Post;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

uses(LazilyRefreshDatabase::class);

test('the homepage displays post titles and bodies safely', function () {
    Post::factory()->create(['title' => '<script>bad</script>', 'body' => 'A post body']);

    $this->get('/')->assertOk()
        ->assertSee('<script>bad</script>')
        ->assertDontSee('<script>bad</script>', false)
        ->assertSee('A post body');
});

test('the homepage paginates posts after twenty entries', function () {
    Post::factory()->count(20)->create(['title' => 'First page post']);
    Post::factory()->create(['title' => 'Second page post']);

    $this->get('/')->assertOk()->assertSee('First page post')->assertDontSee('Second page post')
        ->assertSee('join-item btn btn-active', false);
    $this->get('/?page=2')->assertOk()->assertSee('Second page post')->assertDontSee('First page post');
});
