<?php

function dump($test)
{
  echo '<div 
    style = "display: inline-block;
    padding: 0 10px;
    border: 1px solid gray;
    background-color: lightgray;
  "
  >
  <pre>';
  print_r($test);
  echo '<pre>
  </div>';
}