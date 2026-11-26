<?php

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Support\Facades\DB;

uses(LazilyRefreshDatabase::class);

test('posts can be stored with a title and optional body', function () {
    DB::table('posts')->insert(['title' => 'A post', 'body' => null]);

    $this->assertDatabaseHas('posts', ['title' => 'A post', 'body' => null]);
});
