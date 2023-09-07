<?php

test('Go to homepage', function () {
    $this->get('/')
        ->assertStatus(200);
});
