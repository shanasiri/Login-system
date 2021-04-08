<?php 

session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>FAS</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;1,100;1,700&display=swap"
                rel="stylesheet">
        
    </head>

    <body>

        <div class="top-bar" style="height: 3.5rem">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12 text-right">
                        <h4 style="color:white"><a href="logout.php" class="btn btn-danger btn-md ">Logout</a>
                        Hello, <?php echo $_SESSION['name']; ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <!--Navigation-->
        <section id="nav-bar">
        <nav class="navbar bg-light navbar-light navbar-expand-lg">
            <div class="container">
                <a href="home.html" class="navbar-brand"><img src="images/logo.png" alt="Logo" title="Logo"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                       <li class="nav-item"><a href="home.php" class="nav-link active">Home</a></li>
                       <li class="nav-item"><a href="" class="nav-link">Department</a></li>
                       <li class="nav-item"><a href="gpaCalculator.php" class="nav-link">GPA Calculator</a></li>
                       <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </section>

        <!--Image Carousel-->
        <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="4000"> 

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="images/carousel/1.jpg" alt="" class="w-100">
                 </div>

                <div class="carousel-item ">
                    <img src="images/carousel/2.jpg" alt="" class="w-100">
                </div>

                <div class="carousel-item ">
                    <img src="images/carousel/3.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>

        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev"><span class="fa fa-chevron-left fa-2x"></span></a>

        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next"><span
                class="fa fa-chevron-right fa-2x"></span></a>


        <!--Main page heading-->
        <div class="col-12 text-center mt-5">
            <h1 class="text-dark pt-4">Faculty of Applied Science</h1>
            <div class="border-top border-primary w-50 mx-auto my3"></div>
            <p class="lead">The Faculty of Applied Sciences of the Sabaragamuwa University of Sri Lanka was initially started as the Buttala
            Affiliated University College (BAUC) on 21st June 1993. The BAUC offered two diploma courses, one in Food Science and
            Technology and the other in English Language. With the elevation of the Affiliated University Colleges to fully fledged
            national Universities in early 1996, three Affiliated University Colleges; Sabaragamuwa Affiliated University College,
            Uva Affiliated University College and Buttala Affiliated University College were amalgamated to form the Sabaragamuwa
            University of Sri Lanka and the BAUC became the Faculty of Applied Sciences of the Sabaragamuwa University of Sri Lanka.
            With effect from March 2008, the faculty has been relocated in the main campus premises at Belihuloya.</p>
        </div>

        <!--Three Column Section-->
        <!--<div class="container">
            <div class="row my-5">
                
                <div class="col-md-4 my-4">
                    <img src="images/home/4.png" alt="" class="w-100">
                    <h4 class="my-4 text-center">Learning Management System</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, dolor dignissimos temporibus cupiditate iure dolores provid</p>
                    <a href="#" class="btn btn-outline-dark btn-md">See More</a>
                </div>

            </div>
        </div>-->

        <div class="container" id="cards">
            <!--div class="col-md-4 my-4"-->
            <div class="card-deck">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-center">LMS</h5>
                        <img src="images/home/4.png" alt="" class="w-100">
                    </div>
                </div>

                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-center">Awards</h5>
                        <img src="images/home/5.png" alt="" class="w-100">
                    </div>
                </div>

                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body text-primary">
                        <h5 class="card-title text-center">Career Prospect</h5>
                        <img src="images/home/6.png" alt="" class="w-100">
                    </div>
                </div>
             </div>
            </div>
        </div>

        <div class="jumbotron py-5 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-8 col-xl-9 my-auto">
                        <h4>Looking for any services or help?</h4>
                    </div>

                    <div class="col-md-5 col-lg-4 col-xl-3 pt-4 pt-md-0">
                        <a href="" class="btn btn-primary btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
        <footer>
            <div class="container ">
                <div class="row text-light text-center py-4 justify-content-center">
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <h1>Sabaragamuwa University of Sri Lanka</h1>
                        <p>The Sabaragamuwa University of Sri Lanka is a public university in Belihuloya, Balangoda, Sri Lanka. It was founded on
                        20 November 1991 and consists of Eight faculties.</p>

                        <ul class="social pt-3">
                            <li><a href="" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-twitter-square"></i></a></li>
                            <li><a href="" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <div class="socket text-light text-center py-3">
            <p>&copy; Copyright SUSL 2020. All Rights Reserved.</p>
        </div>

       
       


        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
            crossorigin="anonymous"></script>
    </body>
</html>

<?php
}
else{
    header("Location: index.php");
    exit();
}
?>