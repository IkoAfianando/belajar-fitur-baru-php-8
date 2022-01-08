<?php

class Login {

}

$login = new Login();

// untuk mendapatkan nama class
var_dump($login::class); // php 8
var_dump(get_class($login));
var_dump($login::class);