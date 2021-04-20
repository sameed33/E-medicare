<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>

<?php
session_start();
include 'connect.php';

$query = "select * from hospitaldetails";
$data = mysqli_query($conn, $query);
if ($data) {
  $object = $data->fetch_object();
  $name = $object->name;
  $hospid = $object->hospid;
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

<?php include"top_nav.php";?>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
		<section id="services" class="services">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                  Hospital :
                </h1>
            </div>
             
			 
        </div>
		
		</section>
		
	<main id="main">
    <section id="team" class="team">
      <div class="container" style="margin-top: 100px;">
        <div class="row">
          <div class="col-lg-4" style="background-color: transparent;">
            <div class="member" data-aos="zoom-in">
              
              <div class="member-info">
			  <h4><b><u>HOSPITAL DETAILS -</b></u></h4><br>
                <h4>Hostpital Name : <?php echo $name; ?> </h4>
                <h4>Hospital ID : <?php echo $hospid; ?> </h4>
				<h4>Location : <?php echo $location; ?> </h4>
				<h4>Contact : <?php echo $contact; ?> </h4>
				<h4>Email : <?php echo $email; ?> </h4>

                <div><a href="index.php"><button>Logout</button></a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-8">

            <div class="row">
              <div class="col-sm-6">
                <div class="card">
                  <h3>Dashboard</h3>
                  <form action="dashboard.php">
                    <button class="btn btn-secondary" name="dashboard">View</button>
                  </form>
                </div>
              </div>


              <div class="col-sm-6">
                <div class="card">
                  <h3>All Users</h3>
                  <form action="userdetails.php">
                    <button class="btn btn-secondary" name="userdetails">View</button>
                  </form>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <h3>Payment History</h3>
                  <form action="paymenthist.php">
                    <button class="btn btn-secondary" name="paymenthist">View</button>
                  </form>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="card">
                  <h3>Purschase Details</h3>
                  <form action="purchasehist.php">
                    <button class="btn btn-secondary" name="purchasehist">View</button>
                  </form>
                </div>
              </div>
            </div>
            <br>

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
