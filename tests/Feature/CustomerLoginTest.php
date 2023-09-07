<?php

test('Test customer login page', function () {
    $this->get('/customer/login')
        ->assertStatus(200);
});
