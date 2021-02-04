<?php
$a=$_POST['name'];
$b=$_POST['email'];
$c=$_POST['phone'];
$d=$_POST['desc'];

echo "$a";


$con=new mysqli("localhost","u405444701_rishi","rishish780","u405444701_cont")or die("Connection failed");



$sql="insert into contact(name,email,mobile,message)values('$a','$b','$c','$d')";
if($con->multi_Query($sql)==true)
{
 echo "query successfully submited";   
}
header('Location: submitmsg.html');
    exit();
?>