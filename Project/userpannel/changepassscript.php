<?php
session_start();
$conn=mysqli_connect('localhost','root','','savelife');
 
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$m=$_SESSION['user'];
$bb=mysqli_query($conn,"select (password2) from userregistration where email='$m'");
while($row=mysqli_fetch_array($bb))
{

$old=$row['0'];

}


if($old==$oldpass)
{
$aa=mysqli_query($conn,"UPDATE userregistration SET  password2 ='$newpass'
		 WHERE email = '$m'");
		 if($aa)
		 {
		 
		 $_SESSION['pass']=$newpass;
		header('location:passhbchange.php');
		 
		 }
		 else
		 {
		 header('location:changepass.php');
		 }
		 }
		 else
		 {
		 
		  header('location:changepass1.php');
		 
		 }


?>