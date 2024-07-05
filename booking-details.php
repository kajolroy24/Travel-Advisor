<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="india_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Booking Details</title>
</head>

<body>
    <div class="content">
        <h1>Booking Confirmation</h1>
        <h2>About India</h2>
        <?php
        require 'connection.php';
        require 'booking.php';
        echo
        "<div class='booking-details'>
            <p>Check-In $arrive</p>
            <p>Check-Out</p>
            <p>Room Type</p>
            <p>Guests</p>
        </div>
        <div class='booked-by'>
            <div class='section1'>
                <p>Name</p>
                <p>Contact</p>
            </div>
            <div class='section2'>
                <p>Booking Id</p>
                <p>Booking Date</p>
                <p>Status  Confirmed</p>
            </div>
        </div>
        <div class='add-info'>
            Check in from 1PM
            Check out before 11AM
        </div>
        <a href='booking.php' class='book_btn' type='button'>Book Now</a>"
        ?>
    </div>
        <script src="main.js"> </script>

</body>

</html>