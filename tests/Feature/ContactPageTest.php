<?php

test('Test Contact page', function () {
    $this->get('/')
        ->assertStatus(200);
});
