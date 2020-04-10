<?PHP

session_start();
$selected_radio = $_POST['quiz'];

if($selected_radio=='b'){
  header('location:http://localhost/squiz/fourthpage.html');   
}
else{
	header('location:http://localhost/squiz/error.php');
}
?>