<?php
//The collect function creates a collection of arrays.
//$c->first(); gets the first array in a collection.
//There's also a last() function.
//fetch('name') gets all the values of the name keys 
//in associative arrays.
//The find static method from Eloquent returns an
// array associated with an id.  For example:

$m = Market::find(3);  // Market links to the markets table.