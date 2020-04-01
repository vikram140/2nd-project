<?php  include 'conn.php'; ?>
<?php

if(isset($_POST["limit"], $_POST["start"]))
{
 $query = "SELECT * FROM tour_gallery ORDER BY gallery_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result))
 { 
 ?>
  <h3><?php echo $row['package_description'];?></h3>
  <p><?php echo $row['package_description'];?></p>
  <p class="text-muted" align="right"><?php echo $row['package_description'];?></p>
  <hr />
<?php
}
}
?>