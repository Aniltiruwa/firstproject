<?php
$host="localhost";
$user="root";
$pass="";
$dbname="anildata";
$con = mysqli_connect($host,$user,$pass,$dbname);
if($con){
    echo"connection successful";
}else{
    echo"connection unsuccessful";

}
$user= $_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$sql= "insert into  userinfodata(user,email,mobile,comment)
  VALUES('$user','$email','$mobile','$comment')";
  echo"$sql";

$result=mysqli_query($con,$sql);
header('location:index.php');




?>









