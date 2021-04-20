<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<?php include"connect.php";?>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5feed054df060f156a92f4f1/1equdrjb7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<?php include"top_nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
		<section id="services" class="services">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                  Camp's :
                </h1>
            </div>
             
	<main id="main">
        <section id="team" class="team">
            <div class="container" style="margin-top: 100px;">

                <div class="row">
                    <?php
                    include_once 'connect.php';
                    if (!isset($_GET['value'])) {
                        
                      
                    } else {
                        $value = $_GET['value'];
                    }
                    $sql = "SELECT * FROM  campreg";
                    $result = mysqli_query($conn, $sql);
                    $resultch = mysqli_num_rows($result);
                    if ($resultch > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $campname = $row['campname'];
							$date = $row['date'];

							$campdes = $row['campdes'];
                            $orgname = $row['orgname'];
							$location = $row['location'];
							$contact = $row['contact'];

                    ?>
                            <div class="col-sm-12 col-md-3 col-lg-3" style="margin: 2vh;">
                                <div class="card" style="padding: 20px;">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p><b>Camp Name :</b> <?php echo $campname; ?> </p>
											<p><b>Organization Name :</b> <?php echo $orgname; ?> </p>
											<p><b>Camp Description :</b> <?php echo $campdes; ?> </p>
											<p><b>Camp Date :</b> <?php echo $date; ?> </p>
											
											<p><b>Location :</b> <?php echo $location; ?> </p>
											<p><b>Contact :</b> <?php echo $contact; ?> </p>
											
                                                

                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }
                    ?>
                    <br>

                </div>
        </section>
    </main>
			 
        </div>
		
		</section>
		
      
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
		<?php include"footer.php"; ?>

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
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

<?php include"footer.php";?>
</body>

</html>
