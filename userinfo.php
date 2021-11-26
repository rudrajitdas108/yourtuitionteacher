<?php


$con=mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "connection not successfull";
}
mysqli_select_db($con,'yourtuitionteacher');
$user=$_POST['user']; 
$mobile=$_POST['number'];
$email=$_POST['email'];
$comments=$_POST['message'];

$query="insert into userinfodata (user,mobile,email,message) values ('$user','$mobile','$email','$comments')";
mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);

/* header('location:index.php'); */

?>