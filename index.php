<?php
session_start();
require_once("vendor/autoload.php");
require 'env.php';

$app = new \Slim\Slim();
require_once("functions.php");
require_once("site.php");
$app->run();
?>