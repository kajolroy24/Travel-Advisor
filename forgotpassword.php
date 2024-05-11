<?php
    require ("connection.php");

    if (isset($_POST["forgot_btn"]))
    {
        $query = "SELECT * FROM `registration_table` WHERE `email`='$_POST[email]'";
        $result = mysqli_query($conn, $query);
        if ($result) 
        {
            if (mysqli_num_rows($result)==1)
            {
                $reset_token = bin2hex(random_bytes(16));
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d");
                $query = "UPDATE `registration_table` SET `reset_token`='$reset_token',`reset_token_expire`='$date' WHERE `email`='$_POST[email]'";
                if (mysqli_query($conn, $query))
                {
                    echo
                    "<script>
                        alert('Password reset link sent to email');
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

            else
            {   
                echo
                "<script>
                    alert('Email not found');
                    window.location.href = 'index.php';
                </script>";

            }
        }
        else
        {
            echo 
            "<script>
                alert('Cannot run query');
                window.location.href = 'index.php';
            </script>";
        }
    }
?>