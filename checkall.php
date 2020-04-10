<?php

session_start();
$name=$_SESSION['name'];

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'quiz_db');
$q="insert into quiz(name) values('$name')";
$status=mysqli_query($con,$q);

if($status==1){
		echo "Congratulations ".$name." !!! <br> Your Data is recorded Successfully.";
}
else{
	echo "Not Recorded Successfully.";
}
?>