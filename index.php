<?php

$filename = "text.txt";
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myfile = fopen($filename, "a") or die("Unable to open file!");
    fwrite($myfile,"1 1 1 1 2");
    fclose($myfile);
}*/
if (file_exists($filename))
{
  $readfile = fopen($filename, "r")or die("Unable to open file!");
  while(!feof($readfile)) {
    echo fgets($readfile) . "<br>";
  fclose($readfile);
}
?>
