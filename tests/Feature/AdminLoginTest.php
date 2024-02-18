<?php

use App\Models\User;

it('User can see login page', function () {
    $this->get(route('admin.login'))
        ->assertStatus(200);
});

it('User can login and logout', function () {
    $user = User::factory()->create([
        'name' => 'Test user',
        'email' => 'bappa@mail.com',
        'status' => 1,
    ]);

    $this->get(route('admin.login'))->assertStatus(200);

    $this->post(route('admin.login.post'), [
        'email' => 'bappa@mail.com',
        'password' => 'password',
    ])->assertRedirect(route('admin.dashboard'));

    $this->assertAuthenticated();
    $this->assertAuthenticatedAs($user);

    $this->get(route('admin.logout'))->assertRedirect(route('admin.login'));
    $this->assertGuest();
});

it('User can not login with wrong credentials', function () {
    $this->post(route('admin.login.post'), [
        'email' => 'bappa@mail.com',
        'password' => 'wrong-password',
    ])->assertRedirect(route('admin.login'));
    $this->assertGuest();
});

it('Inactive user can not login', function () {
    User::factory()->create(['name' => 'Test user', 'email' => 'demo@mail.com', 'status' => 0]);

    $this->post(route('admin.login.post'), [
        'email' => 'demo@mail.com',
        'password' => 'password',
    ])->assertRedirect(route('admin.login'));
    $this->assertGuest();
});
