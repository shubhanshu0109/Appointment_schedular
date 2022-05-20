<?php
//   $showAlert="false";
//   $showError="false";
if($_SERVER["REQUEST_METHOD"]=="POST"){
        include '_dbconnect.php';
        $username=$_POST["username"];
        $password=$_POST["password"];
       
        $sql = "select * from users where username='$username' AND password='$password'";
    
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
         
            if ($num==1){
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i>welcome to</i> ON time</strong> you are successfully loged in
                        <button type="button" class="btn btn-success">
                        <a style="text-decoration:none; color: aliceblue;" href="/Appointment_schedular/index.php ">go to home page</a>
                        </button>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        session_start();
                        $_SESSION['loggedin']=true;
                        $_SESSION['username']=$username;
                        
                         //header("location:welcome.php");
            }
   
            else{
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>warning!!</strong> invalid log in credentials.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
 
}
        
?>

    <!-- html -->
    <!doctype html>
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Chicle&family=Lobster&family=Raleway:wght@100&family=Sacramento&family=Updock&display=swap" rel="stylesheet">
        <style>
            a:hover {
                background-color: rgb(234, 114, 220);
            }
            
            div.background {
                background: url(/Appointment_schedular/image/apple-devices-artificial-flowers-business-computer.jpg) repeat;
                border: 2px solid black;
                height: 85vh;
            }
            
            div.transbox {
                position: relative;
                margin: 400px 50px 300px 50px;
                font-size: x-large;
                background-color: #ffffff;
                border: 1px solid black;
                opacity: 0.8;
                font-family: 'Abril Fatface', cursive;
                color: #8b22e2;
            }
            
            div.transbox p {
                margin: 2%;
                font-weight: bold;
                color: #000000;
            }
        </style>
    </head>

    <body>
        <!-- NAVIGATION BAR  -->
        <nav class="navbar navbar-expand-lg  navbar-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="/Appointment_schedular/index.php"> <img class="log-img" src="https://img.icons8.com/bubbles/50/000000/apple-clock.png" />
                    <span class="title-name">ON Time</span>
                </a>

            </div>

            </div>
        </nav>

        <div class="row " style="background-color:#eae3f2 ; position: sticky; ">
            <div class="col-8 detail container-fluid background ">
                <div class="transbox">

                    <h1>Welcome to ONtime.</h1>
                    <p>The Smartest Scheduling Software of its kind</p>
                </div>

            </div>
            <div class="col-4 mt-5 ">
                <form action="/Appointment_schedular/login.php" method="post">
                    <div class="container col-md-8 " style="color:#030005 ; background-color: #c393ea;">
                        <h1 class="text-center ">login</h1>
                        <div class="mb-3 ">
                            <label for="username" class="form-label ">Email address</label>
                            <input type="email " class="form-control " id="username" name="username" aria-describedby="emailHelp ">
                            <div id="emailHelp " class="form-text" style="color: black;">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3 ">
                            <label for="password " class="form-label ">Password</label>
                            <input type="password " class="form-control " id="password" name="password">
                        </div>

                        <button type="submit " class="btn btn-primary mb-3  ">Submit</button> <br>
                </form>
                </div>
                <hr style="border-top: 2px solid black;">
                <a href="/Appointment_schedular/signup.php" class=" text-danger " style="text-decoration:none; font-weight: bold; position: relative; left: 150px; "><em>create new account</em></a><br>
            </div>
        </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js " integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous "></script>
    </body>

    </html>