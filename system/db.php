<?php

/*
* Name: FES (Fast Ecommerce Safety)
* Author: github.com/ptudweb-lab/project
* Version: VERSION.txt
*/
defined('_IN_FES') or die('Error: restricted access');

require_once('db.config.php');

$string = $db['driver'] . ':';
$string .= 'host=' . $db['host'] . ';';
$string .= 'charset=utf8';

try {
    $conn = new PDO($string, $db['username'], $db['password']);
} catch (PDOException  $e ) {
    die('Error: ' . $e)
}