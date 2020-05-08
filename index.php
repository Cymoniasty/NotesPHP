<?php 

declare(strict_types = 1);

namespace App;

require_once ("src/Utils/debug.php");

$test = "test";
$secondaryTest = $test;
dump($secondaryTest);