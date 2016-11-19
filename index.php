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
<button type="button" onclick="loadXMLDoc()">Get my CD collection</button>
<br><br>
<table id="demo"></table>
<button type="button" onclick="loadXMLDoc2()">Get Tuesday</button>
<br><br>
<table id="demo2"></table>
<button type="button" onclick="loadXMLDoc2()">Get Wednesday</button>
<br><br>
<table id="demo2"></table>
<button type="button" onclick="loadXMLDoc3()">Get Thurday</button>
<br><br>
<table id="demo3"></table>
<button type="button" onclick="loadXMLDoc4()">Get Friday</button>
<br><br>
<table id="demo4"></table>
<button type="button" onclick="loadXMLDoc5()">Get my CD collection</button>
<br><br>
<table id="demo5"></table>
<button type="button" onclick="loadXMLDoc6()">Get my CD collection</button>
<br><br>
<table id="demo6"></table>
 
</div>

<div id="section">
<h1>EEM 343 Robotic Auto Team</h1>
</div>
    
<div id="footer">
Copyright @ EEM 343 Robotic 2017
</div>
<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };

  xmlhttp.open("GET", "database/Monday.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
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
  document.getElementById("demo").innerHTML = table;
}

function loadXMLDoc1() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction1(this);
    }
  };

  xmlhttp.open("GET", "database/Tuesdays.xml", true);
  xmlhttp.send();
}
function myFunction1(xml) {
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
  document.getElementById("demo1").innerHTML = table;
}

function loadXMLDoc2() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction2(this);
    }
  };

  xmlhttp.open("GET", "database/Wednesday.xml", true);
  xmlhttp.send();
}
function myFunction2(xml) {
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
  document.getElementById("demo2").innerHTML = table;
}
function loadXMLDoc3() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction3(this);
    }
  };

  xmlhttp.open("GET", "database/Thursday.xml", true);
  xmlhttp.send();
}
function myFunction3(xml) {
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
  document.getElementById("demo3").innerHTML = table;
}
function loadXMLDoc4() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction4(this);
    }
  };

  xmlhttp.open("GET", "database/Friday.xml", true);
  xmlhttp.send();
}
function myFunction4(xml) {
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
  document.getElementById("demo4").innerHTML = table;
}
function loadXMLDoc5() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction5(this);
    }
  };

  xmlhttp.open("GET", "database/Saturday.xml", true);
  xmlhttp.send();
}
function myFunction5(xml) {
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
  document.getElementById("demo5").innerHTML = table;
}
    
function loadXMLDoc6() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction6(this);
    }
  };

  xmlhttp.open("GET", "database/Sunday.xml", true);
  xmlhttp.send();
}
function myFunction6(xml) {
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
  document.getElementById("demo6").innerHTML = table;
}
</script>
</body>
</html>
