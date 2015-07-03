<?php 
include('db.php');

if(isset($_POST['submit'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$headers = "From: ".$name . "\r\n";
mail($email,$subject,$message,$headers);

$sql = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
$stmt = $pdo->prepare($sql);
$stmt->execute(); 

echo 'Your email was sent successfully';
header("Refresh: 3; url=contact.php");
}

?>