<?php
header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
require 'functions.php';
$q=$_GET['q'];
$params = explode('/', $q);

$type = $params[0];
if($type === 'products') {
  getProducts();
}