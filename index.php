<?php
session_start();
include "dbconnect.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description " content="" />
    <title> Santosh Chaudhary| Developer | Travaller</title>
    <!-- <link rel="icon" href="./image/favicon-32x32.png"> -->
    <link rel="icon" href="./image/favicon-32x32.png"/>
   <link type="text/css" rel="stylesheet" href="./css/style.css"/>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>

<?php

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn,  $_POST['email']);
    $subject =mysqli_real_escape_string($conn,  $_POST['subject']);
    $message =mysqli_real_escape_string($conn,  $_POST['message']);

    // $pass = password_hash($password, PASSWORD_BCRYPT);
    // $exequery = "select *from tb_user where email = '$email'";
    // $query = mysqli_query($conn, $exequery);

    // $ecount = mysqli_num_rows($query);

    // if($ecount>0){
    //     echo "email already exists";
    // }

    // $exequery = "select *from tb_user where email='$email'";

    // $equery = mysqli_query($conn, $exequery);

    // $ecount = mysqli_num_rows($equery);

    // if($ecount > 0 ){
    //     echo "email already exists";
    // }

    // email encryption 

    $insertquery = "insert into tb_user (name, email, subject, message) values('$name', '$email', '$subject', '$message')"; 
    $query = mysqli_query($conn, $insertquery);

    if($query){
        ?>
        <script>
            swal("Inserted Successfully");
        </script>


        <?php
    }else{
        ?>
        <script>
            swal("Failed to Insert data");
        </script>
        <?php
    }
}

?>



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-primary text-shadow" href="index.html">S.D</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto justify-content-center text-uppercase font-weight-normal override-hover ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#resume">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact">Contact</a>
                </li>
                <li class="nav-link-item">
                    <a class="nav-link font-weight-bold " id="time" href="#contact"></a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <!-- nav end -->
    <!-- main-background start  -->
    <div class="jumbotron">
        <div class="row" >
            <div class="col-lg-1 col-sm-12 vertical-ori">
                <a href="https://www.facebook.com/profile.php" target="_blank"> <i data-toggle="tooltip" data-placement="top"
                        title="facebook" class="fa-brands fa-facebook text-success "></i></a>
                <!-- <a href="https://www.twitter.com" target="_blank"> <i data-toggle="tooltip" data-placement="top"
                        title="twitter" class="fa-brands fa-twitter text-success"></i></a> -->
                <a href="https://www.linkedin.com/in/santosh-chaudhary-9a933a19a/" target="_blank"> <i data-toggle="tooltip" data-placement="top"
                        title="linkedin" class="fa-brands fa-linkedin text-success"></i></a>
                <a href="https://github.com/santoshchaudhary001" target="_blank"><i data-toggle="tooltips"
                        data-placement="top" title="github" class="fa-brands fa-github text-success"></i></a>
                <!-- <a href="https://www.dribbble.com" target="_blank"><i data-toggle="tooltips" data-placement="top"
                        title="dribbble" class="fa-brands fa-dirbbble text-success"></i></a> -->
            </div>

            <div class="col-lg-5 col-md col-sm-12">
                <div class="row">
                    <h6>Hi, I am</h6>
                </div>
                <div class="row my-2">
                    <h4>Chaudhary Santosh</h4>
                </div>
                <div class="row">
                    <h5><span id="move-text"></span></h5>
                </div>
                <div class="row my-2">
                    <P>I am a Software Developer. I love development work and 
                       Currently I am pursing my Bachelor in Computer Applications.
                       from Aadim National College</P>
                </div>
                <div class="row my-4">
                    <button onclick="download();" id="download_cv" type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom"
                        title="Download My Curriculum viate(CV)">
                    
                     <a style="text-decoration:none;" class="text-white" href="download.php?file=NetworkEngineer">Download CV &nbsp; &nbsp; <span class="fa-solid fa-download"></span></a> 
                    </button>


                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <img src="./image/business.jpg" alt="bg-photo" class="img-fluid" />
            </div>

        </div>
    </div>
    <!-- main-backgroun end -->

    <!-- basic part start -->
    <div class="container">
        <div class="row mx-auto justify-content-center align-items-center ">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-2 col-md col-sm my-3 offset-4">
                        <a href="#"><i class=" text-success fa-solid fa-award fa-2x"></i></a>
                    </div>
                    <div class="col-lg-4 col-md col-sm offset-4">
                        <h6 class="text-uppercase">Fresher</h6>
                        <p class="font-weight-light text-primary">Experience</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-2 my-3 offset-4">
                        <a href="#"><i class="text-success fa fa-book fa-2x"></i></a>
                    </div>
                    <div class="col-lg-4 offset-4">
                        <h6 class="text-uppercase">5 Projects</h6>
                        <p class="font-weight-light text-primary">Completed</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-lg-2 my-3 offset-4">
                        <a href="#"><i class="text-success fa fa-user fa-2x"></i></a>
                    </div>
                    <div class="col-lg-4 offset-4">
                        <h6 class="text-uppercase">Support</h6>
                        <p class="font-weight-light text-primary">Online 24/7</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- basic part start -->
    <!-- intro part start  -->
    <section id="about">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <img src="./image/business.jpg" alt="intro-photo" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h3>About me</h3>
                    <p>I am a Software Developer. I love development work and 
                       Currently I am pursing my Bachelor in Computer Applications.
                       from Aadim National College</p>
                    <div class="row">
                        <div class="col-lg-6 vertical-ori">
                            <li class="fa fa-phone text-success"></li> <span>+977-9868057217</span>
                            <i class="fa-solid fa-envelope text-success"></i> <span>santoshchy10011@gmail.com</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro part start  -->
    <!-- my expertice area skills section start -->
    <section id="resume">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-12 text-center">
                    <br />
                    <h3>My Expertise Area</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <label for="">C</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:65%">
                            65%
                        </div>
                    </div>
                    <label for="">C++</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:60%">
                            60%
                        </div>
                    </div>
                    <label for="">Java</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            70%
                        </div>
                    </div>
                    <label for="">Linux</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:65%">
                            65%
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <label for="">Search Engine Optimization</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:75%">
                            75%
                        </div>
                    </div>
                    <label for="">Graphic Design</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:70%">
                            70%
                        </div>
                    </div>
                    <label for="">UI Design</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:75%">
                            75%
                        </div>
                    </div>
                    <label for="">Web Design</label><br>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                            aria-valuemax="100" style="width:80%">
                            80%
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- my expertice area skills section start -->
        <!-- my qualification start  -->
        <div class="jumbotron my-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <p class="text-primary">My Qualification</p>
                        <h3>Education</h3>
                    </div>
                </div>
            </div><br /><br />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <span class=" fa fa-graduation-cap fa-2x text-success"></span>
                        <h4 class="font-weight-normal">Education</h4>

                        <div class="row my-5">
                            <div class="col-lg-2">
                                <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                                <div class="vertical-line"></div>

                            </div>
                            <div class="col-lg-10 offset-2">
                                <h5 class="">High School</h5>
                                <h6>Gyan Sindhu Secondary School/College, Ghorahi Dang</h6>
                                <p>Management</p>
                                <span>(2075)2018</span>

                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                                <div class="vertical-line"></div>

                            </div>
                            <div class="col-lg-10 offset-2">
                                <h5 class="">Bachelor in Computer Application</h5>
                                <h6>Aadim National College, Chabahil kathmandu Nepal</h6>
                                <p>Computer Science</p>
                                <span>(2080)2023</span>

                            </div>
                        </div>
                        <!-- <div class="row">
                    <div class="col-lg-2">
                        <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                        <div class="vertical-line"></div>
                        
                    </div>
                    <div class="col-lg-10">
                        <h5 class="">Bachelor in Computer Application</h5>
                        <h6>Aadim National College, Chabahil kathmandu Nepal</h6>
                        <p>Computer Science</p>
                        <span>(2080)2023</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                        <div class="vertical-line"></div>
                        
                    </div>
                    <div class="col-lg-10">
                        <h5 class="">Bachelor in Computer Application</h5>
                        <h6>Aadim National College, Chabahil kathmandu Nepal</h6>
                        <p>Computer Science</p>
                        <span>(2080)2023</span>
                        
                    </div>
                </div> -->
                    </div>
                    <div class="col-lg-6">
                        <span class="fa-solid fa-briefcase fa-2x text-success"></span>
                        <h4 class="font-weight-normal">Experience</h4>
                        <div class="row my-5">
                            <div class="col-lg-2">
                                <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                                <div class="vertical-line"></div>
                            </div>
                            <div class="col-lg-10 offset-2">
                                <h5>Development Exp</h5>
                                <h6>-------------------</h6><span>----</span>
                            </div>
                        </div>
                        <hr>
                        <!-- <div class="row">
                <div class="col-lg-2">
                    <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                    <div class="vertical-line"></div>
                </div>
                <div class="col-lg-10">
                    <strong class="text-uppercase">Exp</strong>
                        <h6>-------------------</h6><span>----</span>
                </div>
            </div> -->
                        <hr>
                        <div class="row my-5">
                            <div class="col-lg-2">
                                <div class="circle-icons fa-solid fa-circle-dot text-white"></div>
                                <div class="vertical-line"></div>
                            </div>
                            <div class="col-lg-10 offset-2">
                                <h5>Development Exp</h5>
                                <h6>-------------------</h6><span>----</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- certifications sections  -->
            <!-- ------------------------- -->
            <!-- <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="">My Certifications</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="">Certificate Comming Soon...</p>
            </div>
        </div>
     </div> -->
            <!-- certifications sections  -->
            <!-- .......................... -->
            <!-- interviews sections  -->
            <!-- <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="">My Interview </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <p class="">Interview Comming Soon...</p>
            </div>
        </div>
     </div> -->
            <!-- interviews sections  -->
    </section>
    <!-- my qualification end  -->

    <!-- contact section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Contact</h3>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-5">
                    <img src="./image/business.jpg" alt="contact-photo" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" onsubmit="sendEmail();"   method="post" id="user_form">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control " type="text" placeholder="Enter name" name="name" id="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input class="form-control " type="email" placeholder="Enter email" name="email"
                                id="email" autocomplete="off" required/>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input class="form-control " type="text" placeholder="Enter subject" name="subject"
                                id="subject" autocomplete="off" required/>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <br />
                            <textarea class="form-control" name="message" id="message" rows="4"
                                placeholder="Write message" autocomplete="off" required></textarea> 
                        </div>
                        <button id="send_btn" type="submit" name="submit" class="btn btn-success">Send your message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

    <div class="footer-line">
        <br />
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <a href="https://www.facebook.com/profile.php" target="_blank"> <i data-toggle="tooltips" data-placement="top"
                            title="facebook" class="mx-3 fa-brands fa-facebook text-success fa-2x"></i></a>
                    <!-- <a href="https://www.twitter.com" target="_blank"> <i data-toggle="tooltips" data-placement="top"
                            title="twitter" class="mx-3 fa-brands fa-twitter text-success fa-2x"></i></a> -->
                    <a href="https://www.linkedin.com/in/santosh-chaudhary-9a933a19a/" target="_blank"> <i data-toggle="tooltips" data-placement="top"
                            title="linkedin" class="mx-3 fa-brands fa-linkedin text-success fa-2x"></i></a>
                    <a href="https://github.com/santoshchaudhary001" target="_blank"><i data-toggle="tooltips"
                            data-placement="top" title="github"
                            class="mx-3 fa-brands fa-github text-success fa-2x"></i></a>
                    <!-- <a href="https://www.dribbble.com" target="_blank"><i data-toggle="tooltips" data-placement="top"
                            title="dribbble" class="mx-3 fa-brands fa-dirbbble text-success fa-2x"></i></a> -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center my-3">
                    Copyright &copy;<span id="c_date"></span>, All right reserved.
                   <div id="scrolltop" class="scrollup fa-solid fa-circle-arrow-up fa-2x"></div>
                    <p>Personally crafted <span><a href="https://www.linkedin.com data">&#128587;</a> By </span><span 
                            class="font-weight-normal text-success">Santosh Chaudhary</span></p>
                </div>
            </div>
        </div>
        <!-- footer section working end -->






        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="./js/index.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"></script>
         <noscript>You need to enable javascript to run this application</noscript>
</body>

</html>