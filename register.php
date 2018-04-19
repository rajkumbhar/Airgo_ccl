<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
echo "not connected";
}

if(!mysqli_select_db($con,'airgo'))
{
echo "database not connected";
}
$un=$_POST['name'];
$ue=$_POST['email'];
$ud=$_POST['dateofbirth'];
$us=$_POST['uname'];
$cc=$_POST['password'];


$sql="INSERT INTO air (name,email,dateofbirth,uname,password) VALUES ('$un','$ue','$ud','$us','$cc')";

if(!mysqli_query($con,$sql))
{
echo"not inserted";
}    
else
{ 
mysqli_query($con,$sql);
header("location: Welcome.html");
}

?>
