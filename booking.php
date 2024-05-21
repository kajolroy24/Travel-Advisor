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
    <form name="booking" action="">
        <!--  General -->
        <div class="form-group">
            <h2 class="heading">Booking & contact</h2>
            <div class="input_box">
                <input type="text" id="name" class="floatLabel" name="name">
                <label for="name">Name</label>
            </div>
            <div class="input_box">
                <input type="text" id="email" class="floatLabel" name="email">
                <label for="email">Email</label>
            </div>
            <div class="input_box">
                <input type="tel" id="phone" class="floatLabel" name="phone">
                <label for="phone">Phone</label>
            </div>
            <div class="grid">
                <div class="input_box">
                    <input type="text" id="city" class="floatLabel" name="city">
                    <label for="city">City</label>
                </div>
                <div class="input_box">
                    <input type="text" id="post-code" class="floatLabel" name="post-code">
                    <label for="post-code">Post Code</label>
                </div>
            </div>
            <div class="input_box">
                <input type="text" id="country" class="floatLabel" name="country">
                <label for="country">Country</label>
            </div>
        </div>
        <!--  Details -->
        <div class="form-group">
            <h2 class="heading">Details</h2>
            <div class="grid-date">
                    <div class="input_box">
                        <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                        <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
                    </div>
                    <div class="input_box">
                        <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
                        <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
                    </div>
            </div>
            <div class="grid">
                    <div class="input_box">
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" id="select">
                            <option value="blank"></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
                    </div>
                    <div class="input_box">
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" id="select">
                            <option value="blank"></option>
                            <option value="deluxe" selected>With Bathroom</option>
                            <option value="Zuri-zimmer">Without Bathroom</option>
                        </select>
                        <label for="fruit">Room</label>
                    </div>

                    <div class="input_box">
                        <i class="fa fa-sort"></i>
                        <select class="floatLabel" id="select">
                            <option value="blank"></option>
                            <option value="single-bed">Single Bed</option>
                            <option value="double-bed" selected>Double Bed</option>
                        </select>
                        <label for="fruit">Bedding</label>
                    </div>
            </div>

            <div class="info-box">
                <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
                <br>
                <div class="input_box">
                    <textarea name="comments" class="floatLabel" id="comments"></textarea>
                    <label for="comments">Comments</label>
                </div>
                <button type="submit" value="Submit" class="submit_btn">Submit</button>
            </div>
        </div> <!-- /.form-group -->
    </form>


</body>

</html>