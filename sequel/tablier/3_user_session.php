<?php

use Sequel\Tablier;

$t = new Tablier('users_session');

$t->int('id')->primary();

$t->varchar('hash', 65);
$t->int('usersid',8)->foreign('users');

$t->timestamp('created_at')->onupdate();

$t->build();