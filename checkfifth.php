<?PHP

session_start();
$selected_radio = $_POST['quiz'];

if($selected_radio=='href'){
  header('location:http://localhost/squiz/checkall.php');   
}
else{
header('location:http://localhost/squiz/error.php');	
}
?>