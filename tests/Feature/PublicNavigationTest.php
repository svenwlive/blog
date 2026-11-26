<?php

test('the buttons page and existing button test remain accessible', function () {
    $this->get('/buttons')->assertOk()->assertSee('Click me');
    $this->get('/button-test')->assertOk()->assertSee('Primary Button');
});

test('the homepage includes navigation to the buttons page', function () {
    $this->get('/')->assertOk()->assertSee('href="/buttons"', false);
});
