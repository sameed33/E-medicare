<!DOCTYPE html>

<html lang="en">
<?php include "head.php";
session_start();
include '../connect.php';

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
    <div class="container">

        <!-- Marketing Icons Section -->
    
  <main id="main">
    <section id="team" class="team">
      <div class="container" style="margin-top: 100px;">
         <div class="row">
      <div class="col-lg-12" style="background-color: transparent;">

     <form class="modal-content" method="POST" action="">
      
      
      <hr>
      <label for="group"><b>Select blood group :</b></label>
      <select name="group" id="group" style="height:30px;width: 50px;">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="AB">AB</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>

        <button class="btn btn-primary" name="search" id="add">Search</button> <br><br>
      </form></div></div>
<br
<div class="row"><div class="col-lg-6 col-md-6 offset-md-3 col-xl-6 offset-xl-3">     <table class = "table table-sm reflow">
              <thead>
                
              </thead>
                      <tbody>
                            <?php
                            if(isset($_POST['search'])){
                                
                                $group=$_POST['group'];
                                $hospid = $_SESSION['hospid'];
                                $query = "select * from donordetails where hospid='$hospid' && bgroup='$group'";
                                $data = mysqli_query($conn, $query);
                                if ($data->num_rows!=0) {
				 echo "<h3>Donors for blood group $group :</h3><br>";
                                echo "<th>Donor ID</th>
                                      <th>name</th>
                                      <th>Cotact</th>";
                                    while ($object = $data->fetch_object()) 
                                    {
                                    echo "<tr>
                                      <td>".$object->id."</td>
                      
                                      <td>".$object->name."</td>
                                      <td>".$object->contact."</td>
                          
                                      
                                    </tr>";
                                    }
                                    }
                                    else {
                                    echo "<h2>No Donor Found for blood group $group</h2>";
                                    }
                                  }
                                    ?>
                      </tbody>
          
                    </table></div></div>
  </div></div></div>
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
