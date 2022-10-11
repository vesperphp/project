<?php

use Sequel\Tablier;

$t = new Tablier('posts');

$t->int('id')->primary();

$t->int('usersid')->foreign('users');
$t->varchar('title',100);
$t->varchar('slug',100);

$t->text('body');

$t->int('soft_delete',1)->default(0);
$t->timestamp('created_at')->default();
$t->timestamp('updated_at')->onupdate();

$t->build();