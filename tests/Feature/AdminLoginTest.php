<?php

test('Test admin login page', function () {
    $this->get('/adminportal/login')
        ->assertStatus(200);
});
