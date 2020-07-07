<?php
session_start();
require_once("inc/config.php");
if(!isset($_SESSION['email'])){
  header("Location: index.php");
}
if(isset($_POST['title'])){
  $title = $_POST['title'];
  $author = $_POST['author'];
  $shooter = $_POST['shooter'];
  $date = $_POST['date'];

  $name = uniqid().".jpg";
  $tmp_name = $_FILES['pic']['tmp_name'];

  move_uploaded_file($tmp_name,"upload/".$name);

  $upload_query = "INSERT INTO gallery ( `name`, `author`, `shooter`, `date`, `pic`) VALUES ( '$title', '$author', '$shooter', '$date', '$name');";
  mysqli_query($con,$upload_query);
}

//header
require_once("temp-part/header.php");
?>


    <div class="main">
      <h1>
        UPLOAD PHOTO
      </h1>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
          Title
          <input type="text" name="title" >
          Name
          <input type="text" name="author" >
          Shooter
          <input type="text" name="shooter" >
          Date
          <input type="date" name="date" >
          Photo
          <input type="file" name="pic" >
          <input type="submit" value="Add Pic">
      </form>
    </div>
  <?php require_once("temp-part/footer.php"); ?>