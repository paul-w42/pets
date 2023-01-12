<?php

// This is my CONTROLLER for the hello project

// Turn on error reporting (probably want off when live)
// this will turn it on for each page in our project
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once("vendor/autoload.php");

// Create an instance of the Base class
$f3 = Base::instance();     // i.e. Base f3 = new Base() in java


// Define a default route
$f3->route('GET /', function() {
    //echo '<h1>Pet Home</h>';
    $view = new Template();
    echo $view->render('views/home.html');
});

// Run Fat-Free
$f3->run();                 // -> is the object operator, equiv to . in java


?>