<?php
session_start();
date_default_timezone_set("Asia/calcutta");
echo"<h2><palign='right'>Session ended at", date("h:i:sa",time()),"</p></h2><br>";
echo"<h2> Thank you",$_SESSION['user'],"</h2>";
$sessiontime=time()-$_SESSION['start'];
echo"<br><br> Your session duration: ",$sessiontime, "seconds", "</h2>";
session_destroy();
?>
