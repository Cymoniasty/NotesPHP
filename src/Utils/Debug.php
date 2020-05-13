<?php

declare(strict_types=1);

error_reporting(E_ALL);
ini_set('display_errors', '1');

function dump($test)
{
  echo '<br/><div 
    style="
    display: inline-block;
    padding: 0 10px;
    border: 1px dashed gray;
    background-color: lightgray;
    "
  >
  <pre>';
  print_r($test);
  echo '</pre>
  </div>
  <br/>';
}
