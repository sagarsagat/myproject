<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
        <link rel="shortcut icon" href="img/fav.ico" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">

    <title>Notesify</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>
  
  
  <script>$( document ).ready( function() {
    $('#modalAbandonedCart').modal('show');
    
    });
</script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">



    

    <!-- BOTTOM NAV -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Notesify<span class="dot">.</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Department
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          
                              <a class="dropdown-item" href="#">Animation &amp; Multimedia</a>
                              <a class="dropdown-item" href="#">Biochemistry</a>   
                              <a class="dropdown-item" href="#">Biotechnology</a>   
                              <a class="dropdown-item" href="#">Botany &amp; Horticulture</a>   
                              <a class="dropdown-item" href="#">Chemistry</a>   
                              <a class="dropdown-item" href="#">Commerce &amp; Business Management</a>   
                              <a class="dropdown-item" href="BCA_department.php">Computer Science</a>   
                              <a class="dropdown-item" href="#">Economics</a>   
                              <a class="dropdown-item" href="#">Electronics</a>   
                              <a class="dropdown-item" href="#">English</a>   
                              <a class="dropdown-item" href="#">Environmental Studies</a>   
                              <a class="dropdown-item" href="#">Food Processing &amp; Engineering</a>   
                              <a class="dropdown-item" href="#">Geography</a>   
                              <a class="dropdown-item" href="#">Hindi</a>   
                              <a class="dropdown-item" href="#">History</a>   
                              <a class="dropdown-item" href="#">Journalism</a>   
                              <a class="dropdown-item" href="#">Kannada</a>   
                              <a class="dropdown-item" href="#">Mathematics</a>   
                              <a class="dropdown-item" href="#">Microbiology</a>   
                              <a class="dropdown-item" href="#">Physics</a>   
                              <a class="dropdown-item" href="#">Political Science</a>   
                              <a class="dropdown-item" href="#">Sanskrit</a>   
                              <a class="dropdown-item" href="#">Software Development</a>   
                              <a class="dropdown-item" href="#">Zoology</a>   
                              </div>
                      </li>
                    
                    <li class="nav-item">
                        
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                </ul>
                <a href="logout.php" class="btn btn-brand ms-lg-3"><?php     echo  $_SESSION['log'];?></a>
            </div>
        </div>
    </nav>

    <!-- SLIDER -->
    <div class="owl-carousel owl-theme hero-slider" id="home">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                        <h6 class="text-white text-uppercase">Dr.A.P.J.Abdul Kalam</h6>
                        <h1 class="display-3 my-4">Science is a beautiful gift to humanity; <br>we should not distort it.</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="slide slide2">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 text-white">
                        <h6 class="text-white text-uppercase">Benjamin Franklin</h6>
                        <h1 class="display-3 my-4">An investment in knowledge pays the best interest</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ABOUT -->
    <section id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 py-5">
                    <div class="row">

                        <div class="col-12">
                            <div class="info-box">
                                <img src="img/know1.png" alt="">
                                <div class="ms-4">
                                    <h5>Digital notes</h5>
                                    <p>Digital note taking is a combination of
                                         techniques that allow you to take and store your notes electronically     </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/vl.png" alt="">
                                <div class="ms-4">
                                    <h5>Video tutorials</h5>
                                    <p>Video tutorials can be broadly defined as asynchronous instructional videos
                                         (often screencasts, but also animation or live-action footage) 
                                        providing step-by-step guidance for specialised activities. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="info-box">
                                <img src="img/li.png" alt="">
                                <div class="ms-4">
                                    <h5>Live classes</h5>
                                    <p>Live online classes are synchronous events organized in a live virtual meeting room where 
                                        students and teachers meet together to communicate with voice, video, whiteboard. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="img/abtme.png" alt="" style="border-radius: 30%;">
                </div>
            </div>
        </div>
    </section>

    <!-- MILESTONE -->
    <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">100k</h1>
                    <p class="mb-0">Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">45M</h1>
                    <p class="mb-0">Lines of notes</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">50k+</h1>
                    <p class="mb-0">Total Downloads</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h1 class="display-4">200K</h1>
                    <p class="mb-0">Users</p>
                </div>
            </div>
        </div>
    </section>

    


    <section id="team">
        <div class="container">
            <div class="row">
                <div class="col-18">
                    <div class="intro">
                        <h6>Team</h6>
                        <h1>Team Members</h1>
                        <p class="mx-auto">Our development teams work together to build a technical project or product.
                             Every person on the development team plays a part in making this happen and should be held accountable for their work.
                              Most importantly, 
                             our software development teams is be self-organizing and cross-functional.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/raj_dp.png" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Dr Rajesh K M</h5>
                        <p> Project manager</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/shashu.png" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Shashank H N</h5>
                        <p>Frontend Developer & DBA</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-8">
                    <div class="team-member">
                        <div class="image">
                            <img src="img/mydp.png" alt="">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram'></i></a>
                                <a href="#"><i class='bx bxl-pinterest'></i></a>
                            </div>
                            <div class="overlay"></div>
                        </div>

                        <h5>Sagar C N</h5>
                        <p>Full stack Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light" id="reviews">

        <div class="owl-theme owl-carousel reviews-slider container">
            <div class="review">
                <div class="person">
                    <img src="img/RPR.png" alt="">
                    <h5>Sreyas J K</h5>
                    <h5></h5>
                    <small>3rd year  BCA student</small>
                </div>
                <h3>As i was learning python from long time, but when i got a man like Avinash Jain.....omg his
                     programming skill is too strong in python. Avinash's teaching skill is soo good as i was easily getting
                      his words and all concepts what ever he wanted to make me understand. I'm thankful to him for this awesome
                       python course. When i've started studying about python, so i was bit confused on its concepts and theories, i've seen lots videos
                        on YT but i was not exactly satisfied from them. .</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/RPR.png" alt="">
                    <h5>Sneha</h5>
                    <small>3rd year  Bvoc student</small>
                </div>
                <h3>Left mouse pointer on text frequently

                    Recording setup picked up heavy key strikes making listening difficult.
                    
                    Solved problems well as they came.
                    
                    Covered many functions of python and seemed knowledgeable</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
            <div class="review">
                <div class="person">
                    <img src="img/RPR.png" alt="">
                    <h5>Manoj</h5>
                    <small>1st BSC comp.sci</small>
                </div>
                <h3>He doesn't go in detail about his code. Just writes random code and doesn't
                     explain things. I am already an experienced, but I'm talking from a beginner's
                     point of view. He's literally just writing code and doesn't explain things</h3>
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class="bx bxs-star-half"></i>
                </div>
                <i class='bx bxs-quote-alt-left'></i>
            </div>
        </div>
    </section>

    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Blog</h6>
                        <h1>Blog Posts</h1>
                        <p class="mx-auto">Notifications are communication messages sent to a user through desktop web,mobile web or email for register users</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/java.png" alt="">
                        <a href="#" class="tag">JAVA</a>
                        <div class="content">
                            <small>01 JUNE, 2022</small>
                            <h5>Java pratical notes</h5>
                            <p>3rd sem java pratical notes are online students can download it</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/html-css.png" alt="">
                        <a href="#" class="tag">Web Programming</a>
                        <div class="content">
                            <small>02 Aug, 2022</small>
                            <h5>Web Design notes</h5>
                            <p>5rd sem Web Programming theory detailed unit-2 notes are online students can download it </p>
                        </div>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <img src="img/op.jpg" alt="">
                        <a href="#" class="tag">Operation research</a>
                        <div class="content">
                            <small>01 Dec, 2022</small>
                            <h5>Operation research notes</h5>
                            <p>5rd sem Web Programming theory detailed unit-1 notes are online students can download it</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-top text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h4 class="navbar-brand">Notesify<span class="dot">.</span></h4>
                        <p>Smart way of education lead to best result. Notes Management system help maintain the softcopy notes in effective way</p>
                        <div class="col-auto social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram'></i></a>
                            <a href="#"><i class='bx bxl-pinterest'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="mb-0">Copyright@2022. All rights Reserved</p>
        </div>
    </footer>


    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="container-fluid">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-12 bg-cover"
                                style="background-image: url(img/c2.jpg); min-height:300px;">
                                <div>
                                    
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <form class="p-lg-5 col-12 row g-3">
                                    <div>
                                        <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">First name</label>
                                        <input type="text" class="form-control" placeholder="Jon" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="userName" class="form-label">Last name</label>
                                        <input type="text" class="form-control" placeholder="Doe" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="userName" class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="col-12">
                                        <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                        <textarea name="" placeholder="This is looking great and nice." class="form-control" id=""  rows="4"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

  





   
</body>

</html>