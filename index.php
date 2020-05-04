<?php require_once("temp-part/header.php"); ?>
<style>
  .copyright{
    color: black;
  }
</style>
    <div class="gallery">
<?php
      $pic_query = "select * from gallery";
      $query_ex = mysqli_query($con,$pic_query);
	  while($row = mysqli_fetch_assoc($query_ex)){
?>
      <div class="card">
        <img src="admin/upload/<?php echo $row['pic']; ?>" alt="">
        <h3> <?php echo $row['name']; ?></h3>
        <h5>👤 <?php echo $row['author']; ?> </h5>
        <h5>📷 <?php echo $row['shooter']; ?></h5>
        <h5>🕦 <?php echo $row['date']; ?></h5>
      </div>
<?php
      }
?>
    </div>

<?php require_once("temp-part/footer.php"); ?>