<!DOCTYPE html>
<html>
<title> EEM 343 Robotic </title>
    
<head>
  <link rel="stylesheet" href="robo.css">
</head>
    
<body>

<div id="header">
<h1>EEM 343 Robotic Auto Team</h1>
</div>
    
<?php

$filename = "text.txt";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $myfile = fopen($filename, "a") or die("Unable to open file!");
    fwrite($myfile,"1 1 1 1 2");
    fclose($myfile);
}

if (file_exists($filename))
{
  $readfile = fopen($filename, "r")or die("Unable to open file!");
  while(!feof($readfile)) 
    echo fgets($readfile) . "<br>";
  fclose($readfile);
}/*
if (file_exists($filename))
{
    $myfile = fopen("text.txt", "r") or die("Unable to open file!");
    while(!feof($readfile)) 
    echo fgets($myfile);
    fclose($myfile);
}*/
?>
<div id="footer">
Copyright @ EEM 343 Robotic 2016
</div>

</body>
</html>
