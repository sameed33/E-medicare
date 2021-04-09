<!DOCTYPE html>

<html lang="en">
<?php 
include "head.php";

session_start();

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

<?php include "top_nav.php";?>

    <!-- Page Content -->
    

        <!-- Marketing Icons Section -->
	
	<main id="main">
    <div class="container"><br><br>
      <div class="row">
        <div class="col-sm-12 offset-2">
    <form class="modal-content" method="POST" action="bloodprocess.php">
      
      
      <hr>
      <center><h2>Blood Donor Details : </h2></center>
      <label for="shopname"><b>Donor Name :</b></label><br>
      <input type="text"  class="form-control" placeholder="dname" name="dname" required>

      <label for="group">Blood Group :</label>
      <select name="group" id="group" class="form-control">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
<br>

<label for="amount"><b>Blood Quantity (in ml) :</b></label><br>
      <input type="number"  class="form-control" placeholder="" name="amount" required>


    <label for="contact"><b>Contact Number :</b></label><br>
      <input type="tel" class="form-control" placeholder="Contact" name="contact" required>

        <button class="btn btn-primary" name="add" id="add">Add</button> 
      </form>
    </div></div></div>
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

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

<?php include "footer.php";?>
</body>

</html>
