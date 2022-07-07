<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use Leaf\Router;

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/autoload.php";

Router::get("/", "DisplayController@index");
Router::get("/detail/{id}", "DisplayController@detail");
Router::get("/sync", "SyncController@index");

Router::run();
