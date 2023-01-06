<?php
 $servername="localhost";
 $username="root";
 $password="";
 $databasename="databaseconnection_db";

 $conn=mysqli_connect($servername,$username,$password,$databasename);
// now check the connection
 if(!$conn)
 {
 	die("Connection Failed:" . mysqli_connect_error());

 }

 if(isset($_POST['save']))
 {	
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
	 $sql_query = "INSERT INTO `databasec` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message');";

	 if (mysqli_query($conn, $sql_query)) 
 	 {
     		echo "Submited successfully !";
 } 
 	 else
      {
 		echo "Error " . $sql_query . mysqli_error($conn);
 	 }
 	 mysqli_close($conn);
  
 }

?>