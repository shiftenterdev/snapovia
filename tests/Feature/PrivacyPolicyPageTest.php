<?php

test('Go to privacy-policy page', function () {
    $this->get('/privacy-policy')
        ->assertStatus(200);
});
