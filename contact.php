<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gym";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn){
      echo "Connected";
    }
    if($_POST['submit']){
      $eml     = $_POST['email'];
      $msg     = $_POST['message'];
      $sub     = $_POST['subject'];
      $query="INSERT INTO request(email,sub,msg) 
      VALUES('$eml','$sub','$msg');";
      $data=mysqli_query($conn,$query);
      if($data){
        echo "<script>alert('Data inserted succesfully')</script>";
        echo"<meta http-equiv = 'refresh' content = '0; url = http://localhost/Project/Gym/index.html'>";
      }
      else{
        echo "<script>alert('Data insertion failed')</script>";
      }
    }

?>