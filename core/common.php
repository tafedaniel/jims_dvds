<?php

// required for each accessible PHP page (controller)

if( isset($_SESSION) === FALSE ) {
    session_start();
}

// classes
require_once __DIR__ . "/View.php";
require_once __DIR__ . "/Database.php";
require_once __DIR__ . "/../models/DVD.php";