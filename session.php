<?php
   
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "moneykeeper";

	$conn = mysqli_connect($servername,$username,$password,$dbname);

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select username from user where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header('location: '.ROOT.' ');
   }
?>