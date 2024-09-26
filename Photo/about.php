<?php
   $con = mysqli_connect('localhost','root');

   if($con){
    echo "connection Successful";
   }
   else{
    echo "Connection Failed";
   }
   mysqli_select_db($con,'photography');

   $name = $_POST['name'];
   $email = $_POST['email'];
   $number = $_POST['number'];

   $query = "Insert INTO users(name,email,number) VALUES('$name','$email','$number')";

   mysqli_query($con,$query);
   header('location:index.php#contactus');

?>