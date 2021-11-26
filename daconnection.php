<?php


$con=mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "connection not successfull";
}
mysqli_select_db($con,'yourtuitionteacher');
$user=$_POST['username'];
$gender=$_POST['gender'];
$age=$_POST['age']; 
$mobile=$_POST['number'];
$email=$_POST['email'];
$address=$_POST['address'];
$qualification=$_POST['highqualification'];
$year=$_POST['year'];
$course=$_POST['course'];
$schoolcollege=$_POST['institution'];
$boarduniver=$_POST['boarduniver'];
$experience=$_POST['experience'];
$pincode=$_POST['pinr'];
$class=$_POST['class'];
$subject=$_POST['subject'];

$query="insert into teacherformconnect (name,gender,age,contact number,email,address,highest qualification,year of passing,course stream honours,college school,board university,years of experience,pin,class,subject name) values ('$user','$gender','$age','$mobile','$email','$address','$qualification','$year','$course','$schoolcollege','$boarduniver','$experience','$pincode','$class','$subject')";
mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);

/* header('location:index.php'); */

?>

