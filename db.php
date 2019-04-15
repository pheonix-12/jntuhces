<?php
	$c=mysqli_connect("localhost","root","","qwe");
	
	$x=mysqli_query($c,"SELECT * FROM xxx");
	$mn=0;
	while($v=mysqli_fetch_array($x))
	{
		#echo $v['un'],$v['ps'];
		if($_POST['un']==$v['un']&&$_POST['ps']==$v['ps'])
		{
			echo "Login Successful";
			$mn++;
		}
	}
	if($mn==0)
	{
		echo "Login unsuccesful";
	}
?>
