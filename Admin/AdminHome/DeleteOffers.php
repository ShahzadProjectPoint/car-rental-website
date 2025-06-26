<?php 


?>


<?php  include("Db.php"); ?>

<?php

 $id=$_GET['id'];
 $query="delete from offers where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data){
    ?>
    <script>
        window.location="OffersShow.php";
    </script>
    <?php
 }

?>