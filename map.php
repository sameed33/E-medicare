<!DOCTYPE html>
<?php
include "connect.php";
session_start();
?>

<body>
	<label for="location"><b>Enter Location</b></label><br>
	<button name="location" onClick="getLocation()">Location</button>
	<div id="output"></div>
	<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script>
		var x = document.getElementById('output');

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);

			} else {
				x.innerHTML = "supporting";
			}
		}

		function showPosition(position) {
			var a = position.coords.latitude;
			var b = position.coords.longitude;
			x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;

			$.post("C:/xampp/htdocs/emedicare/try1.php", {
				position.coords.latitude: position.coords.latitude
			});

		}
		<?php
		$_SESSION['.res.id.'] = $_POST["position.coords.latitude"];
		echo $_SESSION['.res.id.'];
		?>

		function shoLattitue(position) {
			return position.coords.latitude;
		}
	</script>

</body>

</html>