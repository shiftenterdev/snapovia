<?php

test('Go to shipping-and-returns page', function () {
    $this->get('/shipping-and-returns')
        ->assertStatus(200);
});
