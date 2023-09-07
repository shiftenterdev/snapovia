<?php

test('Go to terms page', function () {
    $this->get('/terms')
        ->assertStatus(200);
});
