<?php

foreach( glob('config/*.php') as $config ) { require_once $config;}
foreach (glob('classes/*.php') as $class) {require_once $class;}

$cat = new Category ("Comedie", "Qui fait rire");

$cat = new Category ("Drame", "Qui fait pleurer");

$cat->save();

var_dump($cat);

$cat->delete();