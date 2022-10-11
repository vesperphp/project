<?php

use Sequel\Tablier;

$t = new Tablier('teams');

$t->int('id')->primary();

$t->varchar('slug',20)->unique();
$t->varchar('name',20)->unique();

$t->timestamp('created_at')->default();
$t->timestamp('updated_at')->onupdate();

$t->build();


/**
 * Set up a relational table.
 */

Tablier::relation('users', 'teams');
