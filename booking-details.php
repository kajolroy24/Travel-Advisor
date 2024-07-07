<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking-details.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Booking Details</title>
</head>

<body>

<?php


function booking_details() {
    // "<script>import {name} from './booking.js';</script>";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $arrive = $_POST["arrive"];
    $depart = $_POST["depart"];
    $people = $_POST["people"];
    $bed = $_POST["bed"];
    $date = date("Y/m/d");
    echo
    "<div class='.content'>
    <h1>Booking Confirmation</h1>
        <div class='booked-by'>
        <h3>Booked By</h3>
        <p>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $name</p>
        <p>Contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $email<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $phone</p>
    </div>
    <div class='booking-details'>
        <div class='section1'>
            <h3>Booking Details</h3>
            <p>Check-In &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $arrive</p>
            <p>Check-Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $depart</p>
            <p>Room Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $bed</p>
            <p>Guests &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $people</p>
        </div>
        <div class='section2'>
            <p>Booking Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $date</p>
            <p>Status  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirmed</p>
        </div>
    </div>
    <div class='note'>
        <h3>Note</h3>
        <p>Check in from 1PM <br>
        Check out before 11AM</p>
        <p>Thank you for staying with us! We look forward to your next visit :)</p>
    </div>
    <div class='btn-container'>
        <a href='index.php' class='home-btn' type='button'>Go to Home Page</a>
    </div>";
}
?>
        <!-- booking id -->
    </div>

    <!-- <script src="booking.js"></script> -->

</body>

</html>