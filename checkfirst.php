<?PHP

session_start();
$name=$_POST['name'];
$selected_radio = $_POST['quiz'];


if($selected_radio=='Hyper Text Markup Language'){
	$_SESSION['name']=$name;
  	header('location:http://localhost/squiz/secondpage.html');   
}
else{
	header('location:http://localhost/squiz/error.php');
}
?>