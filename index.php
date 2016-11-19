<!DOCTYPE html>
<html>
<title> EEM 343 Robotic </title>
    
<head>
  <link rel="stylesheet" href="style.css">
</head>
    
<body>

<div id="header">
<h1>EEM 343 Robotic Auto Team</h1>
</div>
    
<div id="section">    
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
}

?>
</div>

<div id="section">
<h1>EEM 343 Robotic Auto Team</h1>
</div>

<div id="section">
<h1>EEM 343 Robotic Auto Team</h1>
</div>
    
<div id="footer">
Copyright @ EEM 343 Robotic 2017
</div>

</body>
</html>
