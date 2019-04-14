<?php
$n1=$_POST['first'];
$n2=$_POST['second'];
switch ($_POST['group']) {
	case 'add':echo "answer is".$n1+$n2;

		# code...
	break;
	case 'subtract':echo "answer is".$n1-$n2;

		# code...
	break;
	case 'multiply':echo "answer is".$n1*$n2;

		# code...
	break;
	case 'division':echo "answer is".$n1/$n2;

		# code...
	break;
	default:
		# code...
		echo "nothing is selected";
	break;
}



?>