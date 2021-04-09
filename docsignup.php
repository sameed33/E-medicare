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
		<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>

		<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script>
		var x = document.getElementById('output');
		function getLocation(){
		if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition);
		}else{
		x.innerHTML = "supporting";
		}
		}
		function showPosition(position){
			
		var a= + position.coords.latitude;
		var b= position.coords.longitude;
		document.getElementById("loc").value = a;
		document.getElementById("loc1").value = b;
		
		//x.innerHTML = "Latitude: " + position.coords.latitude +  "<br>Longitude: " + position.coords.longitude;
		//document.write(a);
		//document.write(b);

		}
		</script>
		
			  
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
   

    <form class="modal-content" method="post" action="docprocess.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="drname"><b>Dr. Name</b></label>
      <input type="text" placeholder="Dr.Name" name="drname" required>

	  
	  <label for="contact"><b>Contact</b></label><br>
      <input type="text" placeholder="Contact" name="contact" required>
	  
	  <label for="spec"><b>Specialization</b></label><br>
      <input type="text" placeholder="Specialization" name="spec" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="conpassword" required>

     <label for="location" ><b>Enter Location</b></label><br>
	 <input type="text" id="loc" name="location1" >
	 <input type="text" id="loc1" name="location2" >
	 <a name="location" name="location" id="location" onClick="getLocation()" required>Location</a>
	 
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button class="btn btn-primary" name="submit" id="submit">Sign up</button>
      <a href="login.php" class="buttonn">Cancel</a>
      </div>
    </div>
  </form>
	
		
      

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
