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
Sequel::insert('roles')->set('name', 'Early adopter')->set('slug', 'early')->set('params', json_encode([]))->do(); // 4

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


// Create a batch of fake users (24)

$names = [
    'Bob', 'Bill', 'Boyd', 'Leslie', 'Stitch',
    'Quinton', 'Jos', 'Hank', 'Mark', 'Fender',
    'Eline', 'Josine', 'Brent', 'Linda', 'Paula',
    'Lilo', 'Melijn', 'Charley', 'Spencer', 'Francesca',
    'Victor', 'Bolen', 'Reginald', 'Wilhelm',

];

$id = 0;
foreach($names as $user){

    $id++;

    $salt = Salt::shake();

    Sequel::insert('users')
            ->set('username', _slug($user).rand(1,100))
            ->set('password', Hash::make('Password', $salt))
            ->set('salt', $salt)
            ->set('email', _slug($user).rand(1,100).'@email.com')
            ->set('firstname', $user)
            ->set('lastname', $user.'ton')
            ->set('country', 'UK')
            ->set('rolesid', 1)
            ->do();

    // Create some fake sessions (1 in 3)
    if(rand(0,2)==1){
        Sequel::insert('users_session')
            ->set('hash', Hash::unique())
            ->set('usersid', $id)
            ->do();
    }    
    
}

// Create a batch of teams

$teams = [
    'Powerhouse', 'Advertising', 'Race Crew 100%', 'Yamaha', 'Sprouts', 
    'Leslivius', 'Steel Works Inc.', 'Commpanions', 'Octaginarian Men', 'The A-Team'
];

$teamid = 0;
foreach($teams as $team){

    $teamid++;

    Sequel::insert('teams')
            ->set('slug', _slug($team))
            ->set('name', $team)
            ->do();

    // Put some users in teams (1 in 2)
    if(rand(0,1)==1){
        Sequel::insert('users_teams_relation')
            ->set('usersid', rand(1, $id))
            ->set('teamsid', $teamid)
            ->do();
    }  

    

}
