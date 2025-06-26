

<?php  include("./include/top.php"); ?>
 <?php  include("./include/sidebar.php");?> 
 <?php  include("Db.php"); ?>

    <div class="page">
    <?php   include("./include/nav.php"); ?>

    <form method="post" enctype='multipart/form-data'>
   
  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Title</label>
    <input type="text" name="title" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>


  <div class="mb-3">
    <label class="form-label mt-2 mb-1" style="width:300px; margin-left: 200px;">Description</label>
    <input type="text" name="desc" style="width:300px; margin-left: 200px; border-radius: 40px;" class="form-control" >
  </div>


  
  <div class="alert alert-success" id="error" style="display:none">
               Faq Insert Successfully
                </div>

    <input type="submit" name="submit" style="margin-left: 300px;" class="btn btn-primary mt-1">
</form>


      <div style="margin-left:30px; margin-top:30px; margin-left:30px;">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID </th>
                  <th>Title</th>
                  <th>Description</th>
                  <th> Edit </th>
                  <th> Delete </th>
                </tr>
              </thead>
              <tbody>
               <?php
                $query3="select * from faq";
                $data3=mysqli_query($conn,$query3);
                while($row=mysqli_fetch_array($data3)){ 
               ?>              
                  <td><?php  echo $row['id'] ?></td>
                  <td><?php  echo $row['title'] ?></td>
                  <td><?php echo $row['description'] ?></td>
                  <td><a class="btn btn-primary" href="EditFaq.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="DeleteFaq.php?id=<?php  echo $row['id']; ?>">Delete</a></td>
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
   
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $res=mysqli_query($conn,"insert into faq values(NULL,'$title','$desc')");
    if($res){
    ?>
    <script>
        document.getElementById("error").style.display="block";
    </script>
    <?php
  }
}

?>