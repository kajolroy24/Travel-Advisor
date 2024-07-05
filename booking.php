<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Hotel Booking</title>
</head>

<body>
    <form name="booking" method="POST" autocomplete="off">
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Booking & contact</h2>
            <div class="input_box">
                <input type="text" id="name" class="floatLabel" name="name" required>
                <label for="name">Name</label>
            </div>
            <div class="input_box">
                <input type="email" id="email" class="floatLabel" name="email" placeholder=" " required>
                <label for="email">Email</label>
            </div>
            <div class="input_box">
                <input type="tel" id="phone" class="floatLabel" name="phone" required>
                <label for="phone">Phone</label>
            </div>
            <div class="grid">
                <div class="input_box">
                    <input type="text" id="city" class="floatLabel" name="city" required>
                    <label for="city">City</label>
                </div>
                <div class="input_box">
                    <input type="tel" id="post-code" class="floatLabel" name="postcode" required>
                    <label for="post-code">Post Code</label>
                </div>
            </div>
            <div class="input_box">
                <input type="text" id="country" class="floatLabel" name="country" required>
                <label for="country">Country</label>
            </div>
        </div>
        <!--  Details -->
        <div class="form-group">
            <h2 class="heading">Details</h2>
            <div class="grid-date">
                <div class="input_box">
                    <input type="date" id="arrive" class="floatLabel" name="arrive" required>
                    <label for="arrive" class="label-date"><i class="fa-solid fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
                </div>
                <div class="input_box">
                    <input type="date" id="depart" class="floatLabel" name="depart" required />
                    <label for="depart" class="label-date"><i class="fa-solid fa-calendar"></i></i>&nbsp;&nbsp;Depart</label>
                </div>
            </div>
            <div class="grid">
                <div class="input_box">
                    <i class="fa-solid fa-angle-down" id="down-arrow"></i>
                    <select class="floatLabel" id="select" name="people">
                        <option value="blank" disabled></option>
                        <option value="1">1</option>
                        <option value="2" selected>2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="people"><i class="fa-solid fa-user-group" id="select-icon"></i>&nbsp;&nbsp;People</label>
                </div>
                <div class="input_box">
                    <i class="fa-solid fa-angle-down" id="down-arrow"></i>
                    <select class="floatLabel" id="select" name="food">
                        <option value="blank" disabled></option>
                        <option value="With Breakfast" selected>With Breakfast</option>
                        <option value="Without Breakfast">Without Breakfast</option>
                    </select>
                    <label for="food"><i class="fa-solid fa-utensils" id="select-icon"></i>&nbsp;&nbsp;Breakfast</label>
                </div>

                <div class="input_box">
                    <i class="fa-solid fa-angle-down" id="down-arrow"></i>
                    <select class="floatLabel" id="select" name="bed">
                        <option value="blank" disabled></option>
                        <option value="Single Bed">Single Bed</option>
                        <option value="Double Bed" selected>Double Bed</option>
                    </select>
                    <label for="bed"><i class="fa-solid fa-bed" id="select-icon"></i>&nbsp;&nbsp;Bedding</label>
                </div>
            </div>

            <div class="info-box">
                <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
                <div class="input_box">
                    <textarea type="text" name="comments" class="floatLabel" id="comments" placeholder=""></textarea>
                    <label for="comments">Comments</label>
                </div>
                <button type="submit" value="Submit" class="submit_btn" name="submit" onsubmit="fetchdata(event)">Submit</button>
            </div>
        </div> <!-- /.form-group -->
    </form>

    <script src="main.js">

    </script>

</body>

</html>

<?php

require 'connection.php';

if(isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $country = $_POST["country"];
    $arrive = $_POST["arrive"];
    $depart = $_POST["depart"];
    $people = $_POST["people"];
    $food = $_POST["food"];
    $bed = $_POST["bed"];
    $comments = $_POST["comments"];

    $query =  "INSERT INTO `booking_table`(`name`, `email`, `phone`, `city`, `postcode`, `country`, `arrive`, `depart`, `people`, 
              `breakfast`, `bedding`, `comments`) VALUES ('$name','$email','$phone','$city','$postcode','$country','$arrive','$depart',
               '$people','$food','$bed','$comments')";   
    $result = mysqli_query($conn, $query); 

    if ($result) {
        echo
        "<script>
                alert('Booking Successful!');
                window.location.href = 'booking-details.php';
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
