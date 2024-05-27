<?php 
require('connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Travel Advisor</title>
</head>

<header>
    <div class="title">
        <i class="fa-solid fa-earth-americas"></i>
        <h4>Travel Advisor</h4>
    </div>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#discover">Discover</a></li>
        <li><a href="#places">Special Deals</a></li>
        <li><a href="#footer">About us</a></li>
        <!-- <a href="#" class="login_btn">Login</a> -->
        <!-- <a href="logout.php" class="logout_btn">Logout</a> -->

        <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { 
                echo
                "<div class='login_user' onclick='dropdown_menu();'> 
                    Welcome $_SESSION[username] <i class='fa-solid fa-caret-down'></i>
                </div>";
            }

            else {
            echo
            "<a href='#' class='login_btn'>Login</a>";
            }       
        ?>
    </ul>
    

    <div class="menu">
        <h3>Hello <br> <span>User</span></h3>
        <ul>
            <li><i class="fa-solid fa-user-pen"></i><a href="editprofile.php">Edit Profile</a></li>
            <li><i class="fa-solid fa-right-from-bracket"></i><a href="logout.php">Logout</a></li>
        </ul>
    </div>

</header>

<section class="login_box">
    <div class="wrapper">
        <span class="close_icon"><i class="fa-solid fa-x"></i></span>
        <div class="formbox login">
            <h2>Login</h2>
            <form action="login_register.php" method="POST" autocomplete="off">
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="text" required name="username_email">
                    <label>Username or Email</label>
                </div>
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember me</label>
                    <a href="forgotpassword.php" class="password_link">Forgot Password?</a>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="login_register">
                    <p>Don't have an account?
                    <a href="#" class="register_link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="formbox register">
            <h2>Registration</h2>
            <form action="login_register.php" method="POST" autocomplete="off">
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-user"></i></span>
                    <input type="text" required name="username">
                    <label>Username</label>
                </div>
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="password">
                    <label>Password</label>
                </div>
                <div class="input_box">
                    <span class="icon"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" required name="confirmpassword">
                    <label>Confirm Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" name="register">Register</button>
                <div class="login_register">
                    <p>Already have an account?
                    <a href="#" class="login_link">Login</a></p>
                </div>
            </form>
        </div>

    </div>
 
</section>


<body>
    <main>
        <div class="content" id="home">
            <video id="background-video" autoplay loop muted poster="images/home_img.jpg">
                <source src="images/bgvideo.mp4" type="video/mp4">
            </video>
            <div class="content_bx">
                <h1>The right destination for you and your family</h1>
                <p>Experience the world's most beautiful destinations with us. Book your dream vacation today!</p>
                <a href="#" class="search_btn">Start your search</a>
            </div>
        </div>
        <div class="trip_bx">
            <div class="search_bx">
                    <div class="card">
                        <h4>Location <i class="fa-solid fa-location-dot"></i></h4>
                        <input type="text" name="location" placeholder="Enter your destination">          
                    </div>
                    <div class="card">
                        <h4>Date <i class="fa-solid fa-calendar-days"></i></h4>
                        <input type="date" name="date">          
                    </div>
                    <div class="card">
                        <h4>People <i class="fa-solid fa-users"></i></h4>
                        <input type="number" name="people" placeholder="How many people?">          
                    </div>
                    <a href="#" class="explore_btn" type="button">Explore Now</a>
            </div>
            <div class="travel_bx">
                <h4>Countries to travel</h4>
                <div class="cards">
                    <div class="card">
                        <h3>India <img src="images/india_flag.png" alt=""></h3>
                        <img src="images/india.jpg" alt="" class="city">
                        <div class="btn_city">
                            <a href="india.html">Details</a>
                            <h5>Mumbai Central <br> <span>Rs. 15000</span></h5>
                        </div>
                    </div>
                    <div class="card">
                        <h3>United States <img src="images/us_flag.jpg" alt=""></h3>
                        <img src="images/newyork.jpg" alt="" class="city">
                        <div class="btn_city">
                            <a href="us.html">Details</a>
                            <h5>New York <br> <span>Rs. 35000</span></h5>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Russia <img src="images/russia_flag.png" alt=""></h3>
                        <img src="images/russia.jpg" alt="" class="city">
                        <div class="btn_city">
                            <a href="russia.html">Details</a>
                            <h5>St. Petresburg <br> <span>Rs. 25000</span></h5>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Spain <img src="images/spain_flag.png" alt=""></h3>
                        <img src="images/spain.jpg" alt="" class="city">
                        <div class="btn_city">
                            <a href="spain.html">Details</a>
                            <h5>Barcelona <br> <span>Rs. 35000</span></h5>
                        </div>
                    </div>
                    <div class="card">
                        <h3>France <img src="images/france_flag.png" alt=""></h3>
                        <img src="images/france.jpg" alt="" class="city">
                        <div class="btn_city">
                            <a href="france.html">Details</a>
                            <h5>Paris <br> <span>Rs. 45000</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="discover" id="discover">
                <h2 class="title">Top destinations for your next holiday</h2>
                <h3>Adventures, sunny beaches and cultural getaways</h3>
            <div class="discover_container swiper">
                <div class="swiper-wrapper">
                    <div class="discover_card swiper-slide">
                        <img src="images/italy.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Naples</h2>
                            <span class="discover_desc">Italy</span>
                        </div>
                    </div>
                    <div class="discover_card swiper-slide">
                        <img src="images/japan.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Tokyo</h2>
                            <span class="discover_desc">Japan</span>
                        </div>
                    </div>
                    <div class="discover_card swiper-slide">
                        <img src="images/california.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Palm Springs</h2>
                            <span class="discover_desc">California</span>
                        </div>
                    </div>
                    <div class="discover_card swiper-slide">
                        <img src="images/australia.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Tasmania</h2>
                            <span class="discover_desc">Australia</span>
                        </div>
                    </div>
                    <div class="discover_card swiper-slide">
                        <img src="images/nepal.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Solu-Khumbu</h2>
                            <span class="discover_desc">Nepal</span>
                        </div>
                    </div>
                    <div class="discover_card swiper-slide">
                        <img src="images/rio.jpg" alt="" class="discover_img">
                        <div class="discover_data">
                            <h2 class="discover_title">Lapa</h2>
                            <span class="discover_desc">Rio de Janerio</span>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <div class="places" id="places">
            <h2>Discover the most attractive places</h2>
            <h3>The most exciting destinations, experiences, hidden gems, and traveller faves to check out now</h3>
            <div class="places_container">
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/bora.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Bora Bora</h4>
                        <span><i class="fa-solid fa-location-dot"></i>New Zealand</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CULTURAL RELAX</span>
                            <span class="price">Rs. 35000</span>
                        </div>
                        <p>The relatively small island of Bora Bora is an activity giant, offering visitors the chance to experience 
                           a 4x4 safari, sunbathe and swim at white sandy beaches, dive in a natural underwater park among fish and 
                           corals, circle the turquoise lagoon by boat.</p>
                        <?php bookingBtn() ?>                                       
                    </div>
                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/kyoto.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Kyoto</h4>
                        <span><i class="fa-solid fa-location-dot"></i>Japan</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CULTURAL HERITAGE</span>
                            <span class="price">Rs. 45000</span>
                        </div>
                        <p>The shrines and temples of Kyoto offer a rare link between modern life in the city and its very ancient past.
                           The Shimogamo Shrine dates to the 6th century and seems suspended in time, its serenity and spiritual power 
                           still palpable.</p>
                        <?php bookingBtn() ?>   
                    </div>
                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/dubai.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Dubai</h4>
                        <span><i class="fa-solid fa-location-dot"></i>United Arab Emirates</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CITY RELAX</span>
                            <span class="price">Rs. 55000</span>
                        </div>
                        <p>Everything feels extra spectacular in Dubai—from the ultra-modern Burj Khalifa to the souks and malls filled 
                           with gold and jewellery vendors. Whether that means skiing indoors, dune-surfing in the desert, or zip-lining 
                           above the city if you can dream it you can do it.</p>
                        <?php bookingBtn() ?>
                    </div>
                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/pondicherry.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Pondicherry</h4>
                        <span><i class="fa-solid fa-location-dot"></i>India</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">HISTORIC HERITAGE</span>
                            <span class="price">Rs. 15000</span>
                        </div>
                        <p>Blossoming bougainvilleas, crumbling cathedrals on leafy boulevards and 18th-century colonial buildings 
                           colour the former French colony of Pondy, which sits on the Bay of Bengal. But it's also unmistakably Indian,
                           with colourful festivals throughout the year.</p>
                        <?php bookingBtn() ?>
                    </div>
                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/sydney.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Sydney</h4>
                        <span><i class="fa-solid fa-location-dot"></i>Australia</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CITY RELAX</span>
                            <span class="price">Rs. 55000</span>
                        </div>
                        <p>A bright, modern city embedded in nature, where gallery-hopping, surfing, and fine-dining can all take place 
                           in a single day Sydney offers an urban mix of rich history and contemporary buzz, but with a distinctly 
                           Australian spirit. The Opera House is in the city's harbour.</p>
                           <?php bookingBtn() ?>
                    </div>
                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/bali.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Bali</h4>
                        <span><i class="fa-solid fa-location-dot"></i>Indonesia</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CULTURAL RELAX</span>
                            <span class="price">Rs. 35000</span>
                        </div>
                        <p>Bali packs a lot into one small island— from breathtaking waterfalls like Sekumpul in the north to the white 
                           sand beaches of Nyang Nyang in the south. Whatever you're seeking, you'll probably find from surf-able waves
                           in Batu Bolong to luxury clifftop hotels in Nusa Dua.</p>
                           <?php bookingBtn() ?>
                    </div>

                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/turkey.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Turkey</h4>
                        <span><i class="fa-solid fa-location-dot"></i>Middle East</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CULTURAL HERITAGE</span>
                            <span class="price">Rs. 45000</span>
                        </div>
                        <p>A sunny escape, a wonder of ancient ruins, and a dynamic country stirring with life—Turkey is a multilayered 
                           delight. Blessed by a Mediterranean climate and a rich history influence by the Ottoman Empire, Turkey appeals 
                           to both culture-seekers and beach-buffs.</p>
                        <?php bookingBtn() ?>                       
                    </div>

                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/mauritius.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Mauritius</h4>
                        <span><i class="fa-solid fa-location-dot"></i>East Africa</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CULTURAL RELAX</span>
                            <span class="price">Rs. 25000</span>
                        </div>
                        <p>Mauritius is arguably Africa's wealthiest destination, a tropical paradise with tons to do. Port Louis, the 
                           modern capital of this 38-mile by 29-mile island, is a bustling port with a revitalized waterfront and a 
                           busy market. Rivière Noire is ideal for great deep-sea fishing.</p>
                        <?php bookingBtn() ?>
                    </div>

                </div>
                <div class="places_card">
                    <div class="places_img">
                        <img src="images/singapore.jpg" alt="">
                    </div>
                    <div class="places_name">
                        <h4>Singapore</h4>
                        <span><i class="fa-solid fa-location-dot"></i>Singapore</span>
                    </div>
                    <div class="places_desc">
                        <div class="fees">
                            <span class="type">CITY CULTURAL</span>
                            <span class="price">Rs. 35000</span>
                        </div>
                        <p>This tiny island city-state is a study of fusions and contrasts bursting with wonders waiting to be explored. 
                           Tranquil parks abut futuristic skyscrapers and luxe shopping centres. Your first trip to Singapore will 
                           prove that sometimes the best things come in small packages.</p>
                        <?php bookingBtn() ?>                       
                    </div>
                </div>

                <?php
                    function bookingBtn() {
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) { 
                        echo
                        "<a href='booking.php' class='details_btn'>Book Now</a>";

                    }
                    else  {
                        echo
                        "<a href='#' class='details_btn' onclick='showAlert();'>Book Now</a>
                        <script>
                            function showAlert() {
                            alert('Login in to Book Hotels!');
                            window.location.href = 'index.php';
                            }
                        </script>";
                    }  
                }
                ?> 

            </div>
        </div>
    </main>

    <footer id="footer">
        <video id="footer-video" autoplay loop muted poster="images/home_img.jpg">
            <source src="images/footvideo.mp4" type="video/mp4">
        </video>
        <div class="footer_content">
            <h2>Travel with us</h2>
            <h4>Subscribe to our newsletter</h4>
            <div class="mail_bx">
                <input type="email" placeholder="Enter email address">
                <a href="#" class="send_btn"><i class="fa-regular fa-paper-plane"></i></a>
            </div>
            <div class="footer_card">
                <div class="footer_links">
                    <div class="links">
                        <span class="title">OUR AGENCY</span>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Services</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Insurance</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Agency</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Tourism</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Payments</li>
                    </div>
                    <div class="links">
                        <span class="title">PARTNERS</span>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Booking</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Rental Car</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Hostel World</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Trivago</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Tripadvisor</li>
                    </div>
                    <div class="links">
                        <span class="title">ABOUT US</span>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Resources and policies</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Careers</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Trust and Saftey</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Contact us</li>
                        <li class="link_name"><i class="fa-solid fa-chevron-right"></i>
                            Accesibility Statement</li>
                    </div>
                </div>
                <div class="copyright">
                    <i class="fa-solid fa-earth-americas"></i>
                    <div class="privacy">
                        <p>© 2023 Tripadvisor LLC All rights reserved.</p>
                        <ul>
                            <a href="#"><li class="terms">Terms of use</li></a>
                            <a href="#"><li class="terms">Privacy and Cookie Statement</li></a>
                            <a href="#"><li class="terms">Cookie consent</li></a>
                        </ul>
                    </div>
                    <div class="socials">
                        <ul>
                            <li class="terms"><i class="fa-brands fa-facebook"></i></li>
                            <li class="terms"><i class="fa-brands fa-twitter"></i></li>
                            <li class="terms"><i class="fa-brands fa-pinterest"></i></li>
                            <li class="terms"><i class="fa-brands fa-instagram"></i></li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>

    </footer>

  <script src="swiper-bundle.min.js"></script>
  <script src="main.js"></script>

    
</body>
</html>