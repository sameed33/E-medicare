<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>z

<?php
session_start();

include 'connect.php';
?>



<body>
<!--Start of Tawk.to Script--
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
        </div>
		
		</section>
		
	<main id="main">
    <section id="team" class="team">
	<div class="container" style="margin-top: 10px;">
      <div class="row">
			<div class="col-6 offset-xl-3">
				<div class="card m-2 mt-3 p-2">
					<center>
					<div class="row centered-form ">
					<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center" style="padding:5px;font-size:16px;font-weight:bold"><span class="fa fa-briefcase "> </span>Register Camp</h3>
                    </div>
					
                    <div class="panel-body">
					<form method="post" action="campreg.php" autocomplete="off" role="form" enctype="multipart/form-data">
						<div class="form-group">
							<label class="control-label text-primary" for="campname" >Camp Name</label>
							<input type="text" placeholder="Camp Name" id="campname" name="campname"  required class="form-control input-sm">
						</div>
						<div class="form-group">
							<label class="control-label text-primary" for="orgname">Organization Name</label>
							<input type="text" placeholder="Organization name" id="orgname" name="orgname" required class="form-control input-sm">
						</div>
						
						
						<div class="form-group">
							<label class="control-label text-primary"  for="campdes">Camp Description</label>
							<input type="text" placeholder="Camp Description" id="campdes" name="campdes" required class="form-control input-sm">
							
						</div>
				
						
						<div class="form-group">
							<label class="control-label text-primary" for="date">Date Of Issue for Camp</label>
							<input type="text"  placeholder="YYYY/MM/DD" required id="date" name="date"  class="form-control input-sm DATES">
						</div>
						
						 <div class="form-group">
								<label class="control-label text-primary" for="email" >Email ID</label>
                                <input type="email"  required name="email" id="email" class="form-control" placeholder="Email Address">
                          </div>
	
						 
						   <div class="form-group">
								<label class="control-label text-primary" for="location">Location</label>
                                <input type="text" required name="location" id="location" class="form-control" placeholder="Location"></textarea>
                          </div>

						 
						   <div class="form-group">
								<label class="control-label text-primary" for="contact" >Contact</label>
                                <input type="text" required name="contact" id="contact" class="form-control" placeholder="Contact No">
                          </div>
						   
						  
						<div class="form-group">
								<label class="control-label text-success"><input type="checkbox" checked id="c2">&nbsp; I have read the eligibility criteria and confirm that i am eligible to take Donation Camp.</label> 
								<label class="control-label text-success"><input type="checkbox" checked id="c3" >&nbsp; I agree to the Term and Conditions and consent to have my contact and donor information published to the potential blood recipients.</label>
						  </div>
			
						  <div class="form-group">
							<button class="btn btn-primary" type="submit" name="submit" >Proceed</button>
						  </div>
						 </form></div></div></div</div>
								</center>
								</div>
							</div>
						</div>
						</div>
    </section>
  </main>
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
