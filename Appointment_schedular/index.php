<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- fevicon -->
        <link rel="icon" href="https://img.icons8.com/clouds/100/000000/clock.png">
        <link rel="stylesheet" href="style.css">
        <!-- font  -->
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Chicle&family=Lobster&family=Raleway:wght@100&family=Sacramento&family=Updock&display=swap" rel="stylesheet">
        <title>ON time</title>

        <style>
            /* <!-- footer style --> */
            
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
            .container {
                max-width: 1170px;
                margin: auto;
            }
            
            .row {
                display: flex;
                flex-wrap: wrap;
            }
            
            ul {
                list-style: none;
            }
            
            li {
                text-align: justify;
            }
            
            .footer {
                background: #0c0c0c;
                padding: 70px 0;
            }
            
            .footer-col {
                width: 25%;
                padding: 0 15px;
            }
            
            .footer-col h4 {
                font-size: 18px;
                color: #ffffff;
                text-transform: capitalize;
                margin-bottom: 35px;
                font-weight: 500;
                position: relative;
            }
            
            .footer-col ul li:not(:last-child) {
                margin-bottom: 10px;
            }
            
            .footer-col ul li a,
            .media_custom {
                font-size: 16px;
                text-transform: capitalize;
                color: #ffffff;
                text-decoration: none;
                font-weight: 300;
                color: #ffffff;
                display: block;
                transition: all 0.3s ease;
            }
            
            .footer-col ul li a:hover {
                color: #ffffff;
                padding-left: 8px;
            }
            
            .footer-col .social-links a {
                display: inline-block;
                height: 40px;
                width: 40px;
                background-color: rgba(255, 255, 255, 0.2);
                margin: 0 10px 10px 0;
                text-align: center;
                line-height: 40px;
                border-radius: 50%;
                color: #ffffff;
                transition: all 0.5s ease;
            }
            
            .footer-col .social-links a:hover {
                color: #24262b;
                background-color: #ffffff;
            }
            
            @media(max-width: 767px) {
                .footer-col {
                    width: 50%;
                    margin-bottom: 30px;
                }
                .containerr h1 {
                    margin-left: 0%;
                    width: 50%;
                    height: 50%;
                    text-align: center;
                    line-height: 10px;
                    background-size: 100px 20px;
                }
            }
            
            @media(max-width: 574px) {
                .footer-col {
                    width: 100%;
                }
                .main_head {
                    width: 100%;
                    height: 100vh;
                    background-size: cover;
                }
            }
            
            div.into:hover {
                background-color: rgb(209, 209, 232);
            }
        </style>

    </head>

    <body>

        <!-------------------------------------- NAVIGATION BAR --------------------------------------------------- -->


        <nav class="navbar navbar-expand-lg  navbar-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Appointment_schedular/index.php"> <img class="log-img" src="https://img.icons8.com/bubbles/50/000000/apple-clock.png" />
                    <span class="title-name">ON Time</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav top-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/Appointment_schedular/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Appointment_schedular/crud.php">Reminders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/appointment_schedular/about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Appointment_schedular/help.php">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " tabindex="-1" aria-disabled="true" href="/Appointment_schedular/login.php">logout</a>
                        </li>

                    </ul>

                </div>
                <div class="nav-btn justify-content-end">
                    <button type="button" class="btn btn-primary btn-md">
                    <a style="text-decoration:none; color: aliceblue; " href="/Appointment_schedular/signup.php" style="color:white;">SIGN UP</a></button>
                    <button type="button" class="btn btn-success">
                <a style="text-decoration:none; color: aliceblue;" href="/Appointment_schedular/login.php ">LOG IN</a>
                </button>
                </div>
            </div>
        </nav>
        <!------ --------------------------------------- HOME PAGE /ONTAINER1----------------------------------- -->

        <section class="banners" style="padding-bottom: 650px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="b-t-y">
                            <h1><span class="h1_banner">Simplified Scheduling</span><br>for everyone</h1>
                        </div>
                        <p class="b-p-y" style="color:rgb(14, 14, 14);">Free online Appointment scheduling software with Payments, Invoicing, Sales, Reporting, Customer &amp; Team management.</p>
                        <a href="/Appointment_schedular/Appoint.php"><button class="btn-lg text-center signup-btn-banner btn-primary">Book Appointment Here</button></a>
                    </div>
                    <div class="col-md-6 into ">
                        <img style="width: 100%;" src="image/—Pngtree—business planning with people filling_7516387.png" class="img-banner" alt="ON time-free-online-appointment-scheduling-app">
                    </div>
                </div>
            </div>
        </section>


        <!------------------------------------ what we offer to the users-------------------------------------->

        <div class="container2  " style="padding-bottom: 20px;">
            <div class="container-fluid col-md-8 cardcont">
                <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 ">
                    <div class="col">
                        <div class="card ">
                            <img src="/appointment_schedular/image/Picture1.png" class="card-img-top imghov" alt="THis image is not found">
                            <div class="card-body">
                                <h3 class="card-title">ONLINE BOOKING:
                                    <br>Take bookings 24x7</h3>
                                <p class="card-text">With our Online Booking feature, your clients can make bookings 24x7. We can book or appointment from anywhere anytime.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/appointment_schedular/image/Picture2.png" class="card-img-top imghov" alt="THis image is not found">
                            <div class="card-body">
                                <h3 class="card-title">VIDEO MEETING INTEGRATION: <br>
                                    <h5> Connect with your clients all around the world</h5>
                                </h3>
                                <p class="card-text">Integrate with Google Meet, Microsoft Teams, Zoom. Manage your Virtual Meetings and Classes timing.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/appointment_schedular/image/Picture3.png" class="card-img-top imghov" alt="THis image is not found">
                            <div class="card-body">
                                <h3 class="card-title">Integrated CRUD SYSTEM <br>
                                    <h5> Notify your clients automatically</h5>


                                </h3>
                                <p class="card-text"> Automatically reminds your clients and team members of upcoming bookings. No more missed appointments.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="/appointment_schedular/image/Picture4.png" class="card-img-top  imghov" alt="THis image is not found">
                            <div class="card-body">
                                <h3 class="card-title">CALENDAR SYNC <br>
                                    <h6>Sync with all your favorite Calendars</h6>


                                </h3>
                                <p class="card-text">Avoid clashes between your work and personal schedules. Sync with Google, Outlook, Office 365 & iCloud Calendars. No more double bookings or missed meetings.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <!------------------------------------------------------ footer ------------------------------------------------->
        <footer class="footer mt-7" id="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>Regions</h4>
                        <ul>
                            <li><a href="#">Punjab</a></li>
                            <li><a href="#">Haryana</a></li>
                            <li><a href="#">Uttar Pradesh</a></li>
                            <li><a href="#">Gujarat</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>About us</h4>
                        <ul>
                            <li><a href="#">Permissions and licensing</a></li>
                            <li><a href="#">Frequently asked questions</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <div class="footer_right_contact">
                            <div class="get_fill_number_infor">
                                <div class="media_custom">
                                    <i class="fas fa-phone-square-alt"></i>
                                    <div class="media_body">
                                        <p>+91 7339759809</p>
                                    </div>
                                </div>
                                <div class="media_custom">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <div class="media_body">
                                        <p><a href="mailto:shashidharpandey123@gmail.com">shubhanshu620@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="media_custom">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <div class="media_body">
                                        <p>502-A1 Mohali<br>CU Punjab</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
                            <a href="#" style="padding-left: 50px;">FACEBOOK</a> <br>
                            <a href="#" style="padding-left: 50px;">TWITTER</a> <br>
                            <a href="#" style="padding-left: 50px;">INSTAGRAM</a> <br>
                            <a href="#" style="padding-left: 50px;">LINKEDIN</a> <br>

                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            $(window).load(function() {
                $('.post-module').hover(function() {
                    $(this).find('.description').stop().animate({
                        height: "toggle",
                        opacity: "toggle"
                    }, 300);
                });
            });

            var btn = $('#button');

            $(window).scroll(function() {
                if ($(window).scrollTop() > 300) {
                    btn.addClass('show');
                } else {
                    btn.removeClass('show');
                }
            });

            btn.on('click', function(e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, '300');
            });
        </script>


    </body>

    </html>