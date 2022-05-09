<?php

use App\Models\User;
use function Pest\Laravel\get;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('greets the user when signed out', function () {
    get('/')
        ->assertSee('Bookfriends')
        ->assertSee('Sign up to get started')
        ->assertDontSeeText(['Feed']);
});

it('show authenticated menu when user is signed in', function () {

    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/')
        ->assertSeeText(['Feed', 'My Books', 'Friends', $user->name]);

});

it('show unauthenticated menu when user is not signed in', function () {

    get('/')->assertSeeText(['Home', 'Login', 'Register']);

});
