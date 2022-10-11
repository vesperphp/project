<?php

use Sequel\Tablier;

$t = new Tablier('roles');

$t->int('id')->primary();

$t->varchar('slug',20)->unique();
$t->varchar('name',20)->unique();

$t->text('params');

$t->timestamp('created_at')->default();
$t->timestamp('updated_at')->onupdate();

$t->build();