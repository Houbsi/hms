<?php

test('startpage renders', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('Management Page renders', function () {
    $response = $this->get('/manage/login');

    $response->assertStatus(200);
});
