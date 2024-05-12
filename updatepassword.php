<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forgot-password.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Update Password</title>
</head>

<body>
    <?php
    require("connection.php");

    if (isset($_GET['email']) && isset($_GET['reset_token'])) {
        date_default_timezone_set('Asia/kolkata');
        $date = date("Y-m-d");
        $query = "SELECT * FROM `registration_table` WHERE `email`='$_GET[email]' AND `reset_token`='$_GET[reset_token]' AND `reset_token_expire`='$date'";
        $result = mysqli_query($conn, $query);
        if ($result) 
        {
            if (mysqli_num_rows($result) == 1) {
                echo
                "<section class='login_box'>
                            <div class='wrapper'>
                                <div class='forgot_wrapper'>
                                    <div class='formbox forgot_pass'>
                                    <h2>Create New Password</h2>
                                    <form method='POST' autocomplete='off'>
                                        <div class='input_box'>
                                            <span class='icon'><i class='fa-solid fa-lock'></i></span>
                                            <input type='password' required name='password'>
                                            <label>New Password</label>
                                        </div>
                                        <button type='submit' class='btn' name='updatepassword'>UPDATE</button>
                                        <input type='hidden' name='email' value='$_GET[email]'>
                                    </form>
                                    </div>
                                </div>
                            </div>
                    </section>";
            } 
            else 
            {
                echo
                    "<script>
                        alert('Invalid or Expired Link');
                        window.location.href = 'index.php';
                    </script>";
            }
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

    <?php
        if (isset($_POST['updatepassword']))
        {
            $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $update = "UPDATE `registration_table` SET `password`='$pass',`reset_token`= NULL,`reset_token_expire`= NULL WHERE `email`='$_POST[email]'";
            if (mysqli_query($conn, $update))
            {
                echo
                "<script>
                    alert('Password Updated Successfully');
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

</body>
</html>