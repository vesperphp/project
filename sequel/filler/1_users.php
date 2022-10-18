<?php

use Sequel\Sequel;
use Elemental\Auth\Hash;
use Elemental\Auth\Salt;


/**
 * Add fake users, 
 * roles and teams here.
 */

// Roles

Sequel::insert('roles')->set('name', 'User')->set('slug', 'user')->set('params', json_encode([]))->do(); // 0
Sequel::insert('roles')->set('name', 'Moderator')->set('slug', 'mod')->set('params', json_encode([]))->do(); // 1
Sequel::insert('roles')->set('name', 'Administrator')->set('slug', 'admin')->set('params', json_encode([]))->do(); // 2
Sequel::insert('roles')->set('name', 'Blocked')->set('slug', 'blocked')->set('params', json_encode([]))->do(); // 3

// Admin user

$salt = Salt::shake();

Sequel::insert('users')
        ->set('username', 'Admin')
        ->set('password', Hash::make('Admin', $salt))
        ->set('salt', $salt)
        ->set('email', 'admin@admin.com')
        ->set('firstname', 'Ad')
        ->set('lastname', 'Adminton')
        ->set('country', 'NL')
        ->set('rolesid', 3)
        ->do();


// Create a batch of fake users (19)

$names = [
    'Bob', 'Bill', 'Boyd', 'Leslie', 'Stitch',
    'Quinton', 'Jos', 'Hank', 'Mark', 'Fender',
    'Eline', 'Josine', 'Brent', 'Linda', 'Paula',
    'Lilo', 'Melijn', 'Charley', 'Spencer'
];

foreach($names as $user){

    $salt = Salt::shake();

    Sequel::insert('users')
            ->set('username', $user.rand(0,100))
            ->set('password', Hash::make('Password', $salt))
            ->set('salt', $salt)
            ->set('email', strtolower($user).'@email.com')
            ->set('firstname', strtolower($user))
            ->set('lastname', strtolower($user).'ton')
            ->set('country', 'UK')
            ->set('rolesid', 1)
            ->do();

}

// Create a batch of teams

$teams = [
    'Powerhouse', 'Advertising', 'RaceCrew', 'Yamaha', 'Sprouts'
];

foreach($teams as $team){

    $salt = Salt::shake();

    Sequel::insert('teams')
            ->set('slug', strtolower($team))
            ->set('name', $team)
            ->do();

}