


<?php  include("./include/top.php"); ?>
 <?php  include("./include/sidebar.php");?> 
 <?php  include("Db.php"); ?>

    <div class="page">
    <?php   include("./include/nav.php"); ?>

    <form method="post" enctype='multipart/form-data'>
   
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Email</label>
    <input type="email" name="email" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Phone</label>
    <input type="text" name="phone" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>

  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">address</label>
    <input type="text" name="address" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>


  
  <div class="alert alert-success" id="error" style="display:none">
               Contact Insert Successfully
                </div>

    <input type="submit" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


      <div style="margin-left:30px; margin-top:30px; margin-left:30px;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Email </th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
               <?php
                $query3="select * from contact";
                $data3=mysqli_query($conn,$query3);
                while($row=mysqli_fetch_array($data3)){ 
               ?>              
                  <td><?php  echo $row['email'] ?></td>
                  <td><?php  echo $row['phone'] ?></td>
                  <td><?php echo $row['address'] ?></td>
                  <td><a class="btn btn-primary" href="EditContact.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="DeleteContact.php?id=<?php  echo $row['id']; ?>">Delete</a></td>
                </tr>
                <?php  } ?>
              </tbody>
            </table>
            </div>

      
      
        



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
   
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $res=mysqli_query($conn,"insert into contact values(NULL,'$email','$phone','$address')");
    if($res){
    ?>
    <script>
        document.getElementById("error").style.display="block";
    </script>
    <?php
  }
}

?>