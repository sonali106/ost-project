<?PHP

session_start();
$selected_radio = $_POST['quiz'];

if($selected_radio=='6'){
  header('location:http://localhost/squiz/fifthpage.html');   
}
else{
header('location:http://localhost/squiz/error.php');	
}
?>