<!DOCTYPE html>
<html>
<title> EEM 343 Robotic </title>
    
<head>
  <link rel="stylesheet" href="style.css">
</head>
    
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
    
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
<button type="button" onclick="loadXMLDoc(Monday.xml,demo)">Get my CD collection</button>
<br><br>
<table id="demo"></table>
</div>


    
<div id="footer">
Copyright @ EEM 343 Robotic 2017
</div>
<script>
function loadXMLDoc(file,icd) {
  var xmlhttp = new XMLHttpRequest();
  var path = "database/";
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this,icd);
    }
  };
  path += file;
  xmlhttp.open("GET", path, true);
  xmlhttp.send();
}
function myFunction(xml,identit) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<table><tr><th>Time</th><th>Number of car</th></tr>";
  var x = xmlDoc.getElementsByTagName("TIMEFRAME");
  for (i = 0; i <x.length; i++) {
    table += "<tr><td>" +
    x[i].getElementsByTagName("TIME")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("NUMBEROFCAR")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  table += "</table>";
  document.getElementById(identit).innerHTML = table;
}
</script>
</body>
</html>
