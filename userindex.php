<!DOCTYPE html>

<html lang="en">
<?php include "head.php";?>

<?php
session_start();
include 'connect.php';

  $userid = $_SESSION['userid'];
$query = "select * from userdetails where userid='$userid'";
$data = mysqli_query($conn, $query);
if ($data) {
  $object = $data->fetch_object();
  $name = $object->name;
  $location = $object->location;
  $contact = $object->contact;
  $email = $object->email;
}
?>

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

<?php include"usertop_nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
		<section id="services" class="services">
      <div class="col-lg-12">
                <h1 class="page-header text-primary">
                  User Dashboard :
                </h1>
            </div>
        <div class="row" align="center">
            
			
	<main id="main">
    <section id="team" class="team">
    <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-lg-4" style="background-color: transparent;">
        <div class="member" data-aos="zoom-in">
		
              <div class="member-info">
                <h4><b>User id: <?php echo $userid; ?> </h4>
                <h4><b>Name: <?php echo $name; ?> </h4>
                <h4><b>Location: <?php echo $location; ?> </h4>
                 <h4><b>Contact: <?php echo $email; ?> </h4>

                <div><a href="index.php"><button>Logout</button></a></div>
        </div>
      </div>
      </div>

      <div class="col-lg-8">

      <div class="row">
      <div class="col-sm-6">
         <div class="card">
        <h3>Medical Shop</h3>
		<center><img src="medical.jpg" alt="Italian Trulli"></center>
        <form action="shopdash.php">
        <button class="btn btn-secondary" name="profile">View</button>
        </form>
        </div>
      </div>
	  
	
      <div class="col-sm-6">
         <div class="card">
        <h3>Hospital</h3>
		<center><img src="hospital.jpg" alt="Italian Trulli"></center>
        <form action="hospdash.php">
        <button class="btn btn-secondary" name="edit">View</button>
        </form>
        </div>
      </div>
	  <br>
      
	  
	   <div class="col-sm-6">
         <div class="card">
        <h3>Doctor</h3>
		<center><img src="doctor.jpg" alt="Italian Trulli"></center>
        <form action="docdash.php">
        <button class="btn btn-secondary" name="balance">View</button>
        </form>
        </div>
      </div>
	  <br>
	  
	  <div class="col-sm-6">
         <div class="card">
        <h3>Camps</h3>
		<center><img src="camp.jpg" alt="Italian Trulli"></center>
        <form action="campdash.php">
        <button class="btn btn-secondary" name="balance">View</button>
        </form>
        </div>
      </div>
	  <br> 

    </div>
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
