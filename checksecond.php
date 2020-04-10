<?PHP

session_start();
$selected_radio = $_POST['quiz'];


if($selected_radio=='Cascading Style Sheet'){
  header('location:http://localhost/squiz/thirdpage.html');   
}
else{
	header('location:http://localhost/squiz/error.php');
}
?>