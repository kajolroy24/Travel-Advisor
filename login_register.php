<?php

require 'connection.php';
session_start();


if(isset($_POST["register"])) {

     $username = $_POST["username"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     $confirmpassword = $_POST["confirmpassword"];

     $check_user =  "SELECT * FROM registration_table WHERE email='$email' OR username='$username'";

     $result = mysqli_query($conn, $check_user);

     if($result) {
          if(mysqli_num_rows($result) > 0) {  //executed when username or email already exixts
               $result_fetch = mysqli_fetch_assoc($result);
               if($result_fetch['username'] == $username) {
                    echo
                    "<script>
                         alert('$result_fetch[username] Username already exits');
                         window.location.href = 'index.php';
                    </script>";
                    // header("location: index.php?error=Username and Email already exists");
               }
               else {
                    echo
                    "<script>
                         alert('$result_fetch[email] Email already exits');
                         window.location.href = 'index.php';
                    </script>";
               }
          } 
          
          else {
               $password_hash = password_hash($password, PASSWORD_BCRYPT);
               if($password == $confirmpassword) {    //verify password 
                    $query =  "INSERT INTO `registration_table` (`username`, `email`, `password`) VALUES('$username','$email','$password_hash')";   
                    mysqli_query($conn, $query); 
                    echo
                    "<script>
                         alert('Registration Successful');
                         window.location.href = 'index.php';
                    </script>";
               }

               else {    //if data cannot be inserted
                    echo
                    "<script>
                         alert('Password Doesnot Match');
                         window.location.href = 'index.php';
                    </script>";
               }

          }
     }

     else {
          echo
          "<script>
               alert('Cannot run query');
               window.location.href = 'index.php';
          </script>";
     }
}


if(isset($_POST["login"])) {   

     $username_email = $_POST['username_email'];
     $password = $_POST['password'];

     $query = "SELECT * FROM `registration_table` WHERE `username`='$username_email' OR `email`='$username_email'";

     $result = mysqli_query($conn, $query);

     if($result) {
          if(mysqli_num_rows($result) == 1) {
               $result_fetch = mysqli_fetch_assoc($result);
               if(password_verify($password, $result_fetch['password'])) {
                    //if password matched
                    $_SESSION['logged_in'] = 'true';
                    $_SESSION['username'] = $result_fetch['username'];

                    echo
                    "<script>
                         alert('Login Successful');
                         window.location.href = 'index.php';
                    </script>";

                    // header("location: index.php");
               }

               else {    //if password doesnot match
                    echo
                    "<script>
                         alert('Incorrect Password');
                         window.location.href = 'index.php';
                    </script>";

               }

          }

          else {
               echo
               "<script>
                    alert('Email and Username not Registered');
                    window.location.href = 'index.php';
               </script>";
          }

     }   

     else {
          echo
          "<script>
               alert('Cannot run query');
               window.location.href = 'index.php';
          </script>";
     }
}

?>