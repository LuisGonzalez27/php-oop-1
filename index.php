<?php
include_once __DIR__ . '/Models/movie.php';

$saw= new Movie("Saw",["Horror"], 103, 2004, "vip");
var_dump($saw);

$annabelle= new Movie("Annabelle",["Horror","Mystery"], 98, 2014, "include");
var_dump($annabelle);

$insidious= new Movie("Insidious",["Horror","Mystery","Thriller"], 102, 2010, "vip");
var_dump($insidious);


?>