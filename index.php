<?php

foreach (glob('classes/*.php') as $class) {require_once $class;}

$cat = new Category ("Comedie", "Qui fait rire");

$cat->save();