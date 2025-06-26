<?php 


?>


<?php  include("./include/top.php"); ?>
 <?php  include("./include/sidebar.php");?> 
 <?php  include("Db.php"); ?>


 <?php
    $id=$_GET['id'];
    $query3="select * from offers where id='$id' ";
    $data3=mysqli_query($conn,$query3);
    $result3=mysqli_fetch_assoc($data3);

 ?>

    <div class="page">
    <?php  include("./include/nav.php"); ?>

    <form method="post" enctype='multipart/form-data'>
    
  <div class="mb-3 mt-5">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;"> Title</label>
    <input type="text" name="title" value="<?php echo $result3['title']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Price</label>
    <input type="text" name="price" value="<?php echo $result3['price']; ?>" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>



  
  <div class="alert alert-success" id="error" style="display:none">
               Offers Update Successfully
                </div>

    <input type="submit" name="submit" value="update" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


     
      
      
        



</div>


<script src="assets/bundles/lib.vendor.bundle.js"></script>

<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/counterup.bundle.js"></script>
<script src="assets/bundles/knobjs.bundle.js"></script>
<script src="assets/bundles/c3.bundle.js"></script>

<script src="assets/js/core.js"></script>
<script src="assets/js/page/project-index.js"></script>
</body>

<!-- soccer/project/  07 Jan 2020 03:37:22 GMT -->
</html>


<?php
if(isset($_POST['submit'])){
  
    $title=$_POST['title'];
    $price=$_POST['price'];
    $res=mysqli_query($conn,"update offers set title='$title',price='$price' where id='$id'");
  if($res){
    ?>
    <script>
       document.location="OffersShow.php";
    </script>
    <?php
  }
}


?>
