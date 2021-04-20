<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>

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
            <h1 class="page-header text-primary">
                  Various Option To Login As:
                </h1>
            <div class="col-lg-10">
                
             <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i><b>E-Medi Shop</b></h4>
                    </div>
                    <div class="panel-body">
                        <p>Owners can create their medical shop<br>
						User can buy medicines from any shop they wish to.</p>
						<a href="shoplogin.php" class="btn btn-primary">Owner Login</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i><b>E-Medi Hospital</b></h4>
                    </div>
                    <div class="panel-body">
                        <p>Owner can post their hospitals with facilites<br>
						User can visit hospital of their choice.</p>
						<a href="hosplogin.php" class="btn btn-primary">Owner Login</a>
                    </div>
                </div>
            </div>
			
			  <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i><b>E-Medi Doctor</b></h4>
                    </div>
                    <div class="panel-body">
                        <p>Doctors can post clinic with their specialization<br>
						User can visit the doctor as per their choice.</p>
						<a href="doclogin.php" class="btn btn-primary">Owner Login</a>
                    </div>
                </div>
            </div>
			
			<div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i><b>E-Medi Camp</b></h4>
                    </div>
                    <div class="panel-body">
                        <p>Owner can create various medical camps.<br>
						User can participate in any camp of their choice.</p>
						<a href="camplogin.php" class="btn btn-primary">Owner Login</a>
                    </div>
                </div>
            </div>
			 </div>

             <div class="col-lg-2">
                <div class="panel panel-primary" style="margin-top:75%;">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i><b>User </b></h4>
                    </div>
                    <div class="panel-body">
                        
                        <a href="userlogin.php" class="btn btn-primary">User Login</a>
                    </div>
                </div>
            </div>
             </div>
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
