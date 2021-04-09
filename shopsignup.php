<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<?php include"top_nav.php";?>

<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.buttonn {
  background-color: red;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>

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

    <!-- Page Content -->
   

    <form class="modal-content" method="POST" action="shopprocess.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="shopname"><b>Shop Name</b></label>
      <input type="text"  class="form-control" placeholder="Shop Name" name="shopname" required>

      <label for="location"><b>Location</b></label><br>
      <input type="text" class="form-control" placeholder="Location" name="location" required>
	  
	  <label for="contact"><b>Contact Number</b></label><br>
      <input type="tel" class="form-control" placeholder="Contact" name="contact" required>

      <label for="email"><b>Email</b></label>
      <input type="email"  class="form-control" placeholder="Enter Email" name="email" required>

      <label for="location"><b>Password</b></label>
      <input type="password" class="form-control" name="password" id="password" class="form-control" placeholder="Password">
                            &nbsp;&nbsp;<input type="checkbox" onclick="myFun()">&nbsp;Show Password<br>

      <label for="location"><b>Confirm Password</b></label>
       <input type="password" class="form-control" name="conpassword" id="conpassword" class="form-control" placeholder="Confirm Password">
                            &nbsp;&nbsp;<input type="checkbox" onclick="myFun1()">&nbsp;Show Password

     
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <button class="btn btn-primary" name="signup" id="signup">Sign up</button> </form>
   <a href="login.php" class="btn btn-primary"><font color="white">Cancel</font></a>
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
    <script type="text/javascript">
                function myFun() {
                  var x = document.getElementById("password");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                function myFun1() {
                  var x = document.getElementById("conpassword");
                  if (x.type === "password") {
                    x.type = "text";
                  } else {
                    x.type = "password";
                  }
                }
                
  </script>

<?php include"footer.php";?>
</body>

</html>
