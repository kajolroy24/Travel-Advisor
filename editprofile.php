<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot-password.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Edit Profile</title>
</head>

<body>


    <?php
        require ("connection.php");
        // require ("index.php");
        require ("login_register.php");

        $currentuser = $_SESSION['username'];
        $query = "SELECT * FROM `registration_table` WHERE `username`='$currentuser'";
        $result = mysqli_query($conn, $query);
        // $row = mysqli_fetch_array($result)

        if ($result)
        {
            if (mysqli_num_rows($result)>0) 
            {
                while ($row = mysqli_fetch_array($result))
                {

    ?>

    <section class='login_box'>
        <div class='wrapper'>
            <div class='formbox forgot_pass'>
                <h2>Edit Profile</h2>
                <form action='' method='POST' autocomplete='off'>
                    <div class='input_box'>
                        <span class='icon'><i class='fa-solid fa-user'></i></span>
                        <input type='text' name='username' value='<?php echo $row['username']; ?>' required>
                        <!-- <label>Username</label> -->
                    </div>
                    <div class='input_box'>
                        <span class='icon'><i class='fa-solid fa-envelope'></i></span>
                        <input type='email' name='email' value='<?php echo $row['email']; ?>' required>
                        <!-- <label>Email</label> -->
                    </div>
                    <button type='submit' class='btn' name='edit_btn'>Update</button>
                </form>
            </div>
        </div>
    </section>

    <?php

                }
            }
        }

        if (isset($_POST['edit_btn']))
        {
            $edit = "UPDATE `registration_table` SET `username`='$_POST[username]',`email`='$_POST[email]' WHERE `username`='$currentuser'";
            if (mysqli_query($conn, $edit))
            {
                echo
                "<script>
                    alert('Profile Updated Successfully');
                    window.location.href = 'index.php';
                </script>";
            }
            else
            {
                echo
                "<script>
                    alert('Server Down! Try again later');
                    window.location.href = 'index.php';
                </script>";

            }
        }
    ?>

  <script src="main.js"></script>

</body>

</html>