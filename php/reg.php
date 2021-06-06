<?php
 $db_name = 'pms';
   $host = 'localhost';
   $user = 'root';
   $password = '';


    $db = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

session_start();
if(isset($_POST['register']))
    {	$name = $_POST['name'];
    	$usn = $_POST['usn'];
        $dob = $_POST['dob'];   
        
        $gen = $_POST['gender'];
        $ph = $_POST['phone'];   
        $email = $_POST['email'];
        $pass = $_POST['psw'];
        $query = " insert into student (name,usn,dob,course,gender,phoneno,email,password ) values('$name','$usn','$dob','null','$gen','$ph','$email','$pass')";
        $result = mysqli_query($db,$query);
        if($result)
            {
               echo "Successfully Inserted";
            }
            else
            {   
                echo 'Data in this USN alredy inserted.';
            }

	  }        
?>