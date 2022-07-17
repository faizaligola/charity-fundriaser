<?php
$conn=mysqli_connect("localhost", "root" , "" , "inp1");
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$country=$_POST['country'];
$query="insert into user(name,address,gender,country) VALUES ('$name' , '$address' , '$gender' , '$country') ";
$result=mysqli_query($conn , $query);
if(!$result)
{
    echo ' <script>alert("ERROR OCCURED TRY AGAIN ") </script>';
}
else
{
    echo ' <script>alert("REGISTERED SUCCESFULLY ") </script>';
}

?>