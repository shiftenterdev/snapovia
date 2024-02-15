<?php

use App\Models\User;

test('Test admin login page', function () {
    $this->get('/adminportal/login')
        ->assertStatus(200);
});

test('User can login and logout', function () {
    $user = User::factory()->create(['name' => 'Nama Member', 'email' => 'email@mail.com']);

    $this->visit(route('login'));

    $this->submitForm(__('auth.login'), [
        'email' => 'email@mail.com',
        'password' => 'secret',
    ]);

    $this->see(__('auth.welcome', ['name' => $user->name]));
    $this->seePageIs(route('home'));
    $this->seeIsAuthenticated();

    $this->press(__('auth.logout'));

    $this->seePageIs(route('welcome'));
});
