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
$source=$_POST['fromsrc'];
$dest=$_POST['todest'];
$date=$_POST['dept'];
$atick=$_POST['adult'];
$ctick=$_POST['child'];


$sql="INSERT INTO ticket (fromsrc,todest,dept,adult,child) VALUES ('$source','$dest','$date','$atick','$ctick')";

if(!mysqli_query($con,$sql))
{
echo"not inserted";
}    
else
{ 
mysqli_query($con,$sql);
header("location: Display.html");
}

?>
