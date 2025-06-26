<?php 


?>


<?php  include("Db.php"); ?>

<?php

 $id=$_GET['id'];
 $query="delete from contact where id='$id'";
 $data=mysqli_query($conn,$query);
 if($data){
    ?>
    <script>
        window.location="Contactshow.php";
    </script>
    <?php
 }

?>