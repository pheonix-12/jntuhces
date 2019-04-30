<html>
<head>
<title>Session</title>
</head>
<body>
<?php
echo "<br><br><h2><p align=left>Hello ",$_POST['name'],"</p></h2>";
session_start();
date_default_timezone_set("Asia/Calcutta");
$_SESSION['user']=$_POST['name'];
$_SESSION['start']=time();
$tm=$_SESSION['start'];
echo"<h2> <align=right> Session started at:",date("h:i:sa",$tm), "</p></h2>";
?>
<center>
<br>
<form method='POST' action='sessionlogout.php'>
<button class='button'>logout</button>
</form>
</center>
</body>
</html>
