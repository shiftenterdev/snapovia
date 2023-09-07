<?php

test('Test FAQ page', function () {
    $this->get('/faq')
        ->assertStatus(200);
});
