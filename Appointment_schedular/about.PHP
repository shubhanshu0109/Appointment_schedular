<!DOCTYPE html>
<html lang="en">

<head>
    <title>about us </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/9ea51f0393.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="project.css">
    <script type="text/javascript">
        $(window).on('scroll', function() {
                if ($(window).scrollTop()) {
                    $('nav').addClass('black');
                } else {
                    $('nav').removeClass('black');
                }
            })
            /*menu button onclick function*/
        $(document).ready(function() {
            $('.menu h4').click(function() {
                $("nav ul").toggleClass("active")
            })
        })
    </script>

</head>
<style>
    /* css for back to top button */
    
    html {
        scroll-behavior: smooth;
    }
    
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
    }
    
    .responsive-bar {
        display: none;
    }
    /*---------------------------- our sevice card -----------------------------------*/
    
    .testimonial {
        margin: 120px auto 100px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        grid-gap: 20px;
        margin-top: 3 !important;
    }
    /*---------------------------------------------------        footer      --------------------------------------------------------*/
    
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
        background: /*rgba(0,0,0,0.8)*/
        crimson;
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
    /*===========================================================Our Team ==============================================================*/
    
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    img {
        max-width: 100%;
        height: auto;
    }
    
    .team-page-section {
        position: relative;
        padding-top: 70px;
    }
    
    .team-page-section .team-block {
        margin-bottom: 60px;
    }
    
    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 65px;
    }
    
    .sec-title .title {
        position: relative;
        font-size: 18px;
        color: #bd0000;
        font-weight: 700;
        margin-bottom: 12px;
        text-transform: capitalize;
    }
    
    .sec-title .separator {
        position: relative;
        width: 40px;
        margin-top: 16px !important;
    }
    
    .sec-title .separator:before {
        position: absolute;
        content: '';
        left: 0px;
        top: 0px;
        width: 10px;
        height: 2px;
        background-color: #ff9600;
    }
    
    .sec-title .separator:after {
        position: absolute;
        content: '';
        right: 0px;
        top: 0px;
        width: 10px;
        height: 2px;
        background-color: #ff9600;
    }
    
    .sec-title .separator span {
        position: absolute;
        left: 50%;
        top: -2px;
        width: 10px;
        height: 5px;
        margin-left: -5px;
        display: inline-block;
        background-color: #bd0000;
    }
    
    .sec-title h2 {
        position: relative;
        color: #222222;
        font-weight: 700;
        font-size: 36px;
        line-height: 1.2em;
        margin-top: 35px;
    }
    
    .sec-title .text {
        position: relative;
        font-size: 14px;
        line-height: 1.9em;
        color: #555555;
        margin-top: 10px;
    }
    
    .sec-title.centered .separator {
        margin: 0 auto !important;
        float: none !important;
    }
    
    .sec-title.centered {
        text-align: center !important;
    }
    
    .sec-title.light .title {
        color: #ffffff;
    }
    
    .sec-title.light h2 {
        color: #ffffff;
    }
    
    .sec-title.light .separator span {
        background-color: #ff9600;
    }
    
    .sec-title.light .separator:before,
    .sec-title.light .separator:after {
        background-color: #ffffff;
    }
    
    .team-section {
        position: relative;
        padding: 80px 0px 60px;
    }
    
    .team-section.style-two .pattern-layer {
        position: absolute;
        left: 0px;
        top: 0px;
        right: 0px;
        bottom: 0px;
        background-position: center center;
        background-repeat: no-repeat;
    }
    
    .team-section .title-box {
        position: relative;
        text-align: center;
    }
    
    .team-section .title-box h2 {
        position: relative;
        color: #222222;
        font-size: 36px;
        font-weight: 700;
        line-height: 1.3em;
        margin-bottom: 50px;
    }
    
    .team-section .title-box h2 span {
        color: #ff9600;
    }
    
    .team-block {
        position: relative;
    }
    
    .team-block .inner-box {
        position: relative;
        padding: 40px 70px 28px 0px;
    }
    
    .team-block .inner-box:before {
        position: absolute;
        content: '';
        right: 0px;
        top: 0px;
        left: 70px;
        bottom: 0px;
        border-radius: 10px;
        background-color: #f5f5f5;
        -webkit-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        transition: all 600ms ease;
    }
    
    .team-block .inner-box::after {
        position: absolute;
        content: '';
        top: 0px;
        left: 70px;
        bottom: 0px;
        width: 0%;
        border-radius: 10px;
        -webkit-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        transition: all 600ms ease;
        background-image: -ms-linear-gradient(top, #ffca08 0%, #bd00f7 100%);
        background-image: -moz-linear-gradient(top, #ffca08 0%, #bd00f7 100%);
        background-image: -o-linear-gradient(top, #ffca08 0%, #bd00f7 100%);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #ffca08), color-stop(100, #bd00f7));
        background-image: -webkit-linear-gradient(top, #ffca08 0%, #bd00f7 100%);
        background-image: linear-gradient(to bottom, #ffca08 0%, #bd00f7 100%);
    }
    
    .team-block .inner-box:hover::after {
        width: 81%;
    }
    
    .team-block .inner-box .social-icons {
        position: absolute;
        right: 25px;
        top: 100px;
        z-index: 1;
    }
    
    .team-block .inner-box .social-icons li {
        position: relative;
        margin-bottom: 20px;
    }
    
    .team-block .inner-box .social-icons li a {
        position: relative;
        color: #bd00f7;
        font-size: 18px;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    
    .team-block .inner-box:hover .lower-content h3 a,
    .team-block .inner-box:hover .social-icons li a,
    .team-block .inner-box:hover .lower-content .designation {
        color: #ffffff;
    }
    
    .team-block .inner-box .image {
        position: relative;
        z-index: 1;
        border-radius: 10px;
        background-color: #ffffff;
        box-shadow: inset 0px 0px 35px rgba(0, 0, 0, 0.20);
    }
    
    .team-block .inner-box .image img {
        position: relative;
        width: 100%;
        display: block;
    }
    
    .team-block .inner-box .lower-content {
        position: relative;
        text-align: left;
        z-index: 1;
        padding: 30px 15px 0px 110px;
    }
    
    .team-block .inner-box .lower-content h3 {
        position: relative;
        color: #bd0000;
        font-size: 18px;
        font-weight: 700;
        line-height: 1.3em;
    }
    
    .team-block .inner-box .lower-content h3 a {
        position: relative;
        color: #bd0000;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        -o-transition: all 0.4s;
        transition: all 0.4s;
    }
    
    .team-block .inner-box .lower-content .designation {
        position: relative;
        margin-top: 5px;
        color: #777777;
        font-size: 14px;
    }
    
    .team-block.style-two .inner-box .lower-content h3 a,
    .team-block.style-two .inner-box .social-icons li a {
        color: #ff9600;
    }
    
    .team-block.style-two .inner-box:hover .lower-content h3 a,
    .team-block.style-two .inner-box:hover .social-icons li a {
        color: #ffffff;
    }
    
    .team-block.style-two .inner-box::after {
        background-image: -ms-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
        background-image: -moz-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
        background-image: -o-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
        background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFEB3C), color-stop(100, #ff9600));
        background-image: -webkit-linear-gradient(top, #FFEB3C 0%, #ff9600 100%);
        background-image: linear-gradient(to bottom, #FFEB3C 0%, #ff9600 100%);
    }
    /*=========================================================== All heading =============================================================*/
    
    section .title {
        position: relative;
        text-align: center;
        font-size: 40px;
        font-weight: 500;
        margin-bottom: 60px;
        padding-bottom: 20px;
        font-family: 'Ubuntu', sans-serif;
    }
    
    section .title::before {
        content: "";
        position: absolute;
        bottom: 0px;
        left: 50%;
        width: 180px;
        height: 3px;
        background: #111;
        transform: translateX(-50%);
    }
    
    section .title::after {
        position: absolute;
        bottom: -8px;
        left: 50%;
        font-size: 20px;
        color: crimson;
        padding: 0 5px;
        background: #fff;
        transform: translateX(-50%);
    }
    
    .types .title::after {
        content: "types of tumors";
    }
    
    .faqss .title::after {
        content: "top six faqs";
    }
    
    .bcd .title::after {
        content: "enter all values";
    }
    
    .ourteam .title::after {
        content: "who we are";
    }
</style>

<body>
    <br>
    <br>
    <!--------------------------------------------------------- Our Team ----------------------------------------------------------------->
    <section class="ourteam" id="ourteam">
        <div class="max-width">
            <h2 class="title">About Us</h2>
        </div>
    </section>
    <section>
        <section class="team-page-section">
            <div class="container">

                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="image">
                                <a href="#"><img src="../static/images/WhatsApp Image 2022-05-15 at 5.44.03 PM.jpeg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">SHUBHANSHU PANDEY</a></h3>
                                <div class="designation">20BCS9346</div>
                                <div class="designation">FRONT-END AND BACK-END</div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="#"><img src="../static/images/WhatsApp Image 2022-05-15 at 5.46.56 PM (2).jpeg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">VIVEK MISHRA </a></h3>

                                <div class="designation">20BCS9371</div>
                                <div class="designation">FRONT-END AND BACK-END</div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="image">
                                <a href="#"><img src="../static/images/WhatsApp Image 2022-05-15 at 6.28.09 PM (3) (1).jpeg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">ROHIT GARG</a></h3>
                                <div class="designation">20BCS9368</div>
                                <div class="designation">DOCUMENTATION</div>
                            </div>
                        </div>


                    </div>
                </div>
        </section>
    </section>
    <section>

        <section class="team-page-section">
            <div class="container">

                <div class="row clearfix">

                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="image">
                                <a href="#"><img src="../static/images/WhatsApp Image 2022-05-15 at 5.44.03 PM.jpeg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">SAQUIB AFTAB</a></h3>
                                <div class="designation">20BCS9335</div>
                                <div class="designation">DOCUMENTATION</div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block -->
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <a href="#"><img src="../static/images/WhatsApp Image 2022-05-15 at 5.46.56 PM (2).jpeg" alt="" /></a>
                            </div>
                            <div class="lower-content">
                                <h3><a href="#">DEVADEEP KUMAR</a></h3>

                                <div class="designation">20BCS9355</div>
                                <div class="designation">FINAL REPOrt</div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </section>



    <!--------------------------------------------------------- footer ----------------------------------------------------------------->
    <footer class="footer" id="footer">
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
                                    <p>+91 7905886782</p>
                                </div>
                            </div>
                            <div class="media_custom">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="media_body">
                                    <p><a href="mailto:shashidharpandey123@gmail.com" style="text-decoration:none; COLOR:WHITE;">shashidharpandey123@gmail.com</a></p>
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
                        <a href="#">FACEBOOK</a> <br>
                        <a href="#">TWITTER</a> <br>
                        <a href="#">INSTAGRAM</a> <br>
                        <a href="#">LINKEDIN</a> <br>
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