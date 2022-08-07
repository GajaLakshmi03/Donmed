<?php
 

    if (isset($_POST)) {
        $name = $_POST['name'];
 
 
       $email = $_POST['email'];
 
       $password = $_POST['password'];
 
 
     $donar = $_POST['donar'];
        
        }
        if (!empty($name) || !empty($email)   ||!empty($password) ||  !empty($donar))
        {
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "online medicine donation";
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        
        if (mysqli_connect_error()){
          die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else{
          $SELECT = "SELECT email,password From registration Where email = ? Limit 1";
          $INSERT = "INSERT Into login (name,email,password,donar) values(?, ?, ?, ?)";
          $stmt = $conn->prepare($SELECT);
          $stmt->bind_param("ss", $email,$password);
          $stmt->execute();
          $stmt->bind_result($email);
          $stmt->store_result();
          $rnum = $stmt->num_rows;
        
          //checking username
           if ($rnum==0) {
           $stmt->close();
           $stmt = $conn->prepare($INSERT);
           $stmt->bind_param("ssss",$name,$email,$password,$donar);
           $stmt->execute();
           echo "<script>alert('Login Successful');window.location='mainpage.php'</script>";
          } else {
           echo "<script>alert('Email/Password not matching');window.location='usersign.php'</script>";
          }
          $stmt->close();
          $conn->close();
         }
        } else {
        echo "<script>alert('All field are required');window.location='usersign.php'</script>";
        die();
        }
?>



