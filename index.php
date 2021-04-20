<!DOCTYPE html>

<html lang="en">
<?php include "head.php"; ?>

<body>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5feed054df060f156a92f4f1/1equdrjb7';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    
    <!--End of Tawk.to Script-->

    <?php include "top_nav.php"; ?>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/organ.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/heart.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slide-2.jpg');"></div>
                <div class="carousel-caption">

                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>


    </header>

    <!-- Page Content -->
<br>

    <section class="search-sec">
        <div class="container">
            <form action="viewhospital.php" method="post" >
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                name<input type="text" name="valueToSearch" class="form-control search-slt" placeholder=" Name">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                City<input type="text" class="form-control search-slt" placeholder="City">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                State<input type="text" class="form-control search-slt" placeholder="State">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                Countrie<input type="text" class="form-control search-slt" placeholder="Countrie">
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <button type="submit" name="valueToSearch" value="filter" class="btn btn-danger wrn-btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
        
    </section>



    
    
    <div class="container">



        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                    Services
                </h1>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> E-Medi Shop </h4>
                    </div>
                    <div class="panel-body">
                       <a href="shopdash.php"> <center><img src="medical.jpg" alt="Italian Trulli"></center></a>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i>E-Medi Hospital</h4>
                    </div>
                    <div class="panel-body">
                       <a href="hospdash.php"> <center><img src="hospital.jpg" alt="Italian Trulli"></center></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i>E-Medi Doctor</h4>
                    </div>
                    <div class="panel-body">
                       <a href="doclogin.php"> <center><img src="doctor.jpg" alt="Italian Trulli" ></center></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i>E-Medi Camp</h4>
                    </div>
                    <div class="panel-body">
                        <a href="camplogin.php"><center><img src="camp.jpg" alt="Italian Trulli">
                            <center></a>
                    </div>
                </div>
            </div>

        </div>

        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Portfolio</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p1.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p3.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p4.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p5.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/p6.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary">Features about E-Medicare</h2>
            </div>
            <div class="col-md-6">


                <ul>
                    <h2>
                        <li>Medical shop can be created here, where user can buy their medicines.</li><br>

                        <li>Hospital can be displayed here, for user to know the best hospital nearby.</li><br>

                        <li>Doctors can enroll here, so that user can find doctor as per requirement. </li><br>

                        <li>Various medical field related camps are organized for public help.</li><br>
                    </h2>

                </ul>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/contact.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>We expect your loyal feedback to improve our standard.<br>For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <img src='' width="100%" height="100%" id='ModalImg'>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <?php include "footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })

        $(".img-portfolio").click(function() {
            var a = $(this).attr("src");
            $("#ModalImg").attr("src", a);
            $('#myModal').modal();
        })
    </script>

    <?php include "footer.php"; ?>
</body>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key={AIzaSyDpjyoJuv5HF_QsfDrq22r5NKLKHH7og20}&callback=loadMap">
</script>
</html>