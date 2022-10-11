<?php

use Sequel\Tablier;

$t = new Tablier('users');

$t->int('id')->primary();

$t->varchar('username',50)->unique();
$t->varchar('password',65)->notnull();
$t->varchar('salt',100)->notnull();

$t->varchar('email',100)->notnull();
$t->varchar('firstname',50)->notnull();
$t->varchar('lastname',50);
$t->varchar('country',20);
$t->date('birthdate');

$t->int('rolesid')->default(0)->foreign('roles');

$t->timestamp('created_at')->default();
$t->timestamp('updated_at')->onupdate();

$t->build();