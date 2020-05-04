<?php require_once("temp-part/header.php"); ?>
<style>
     body{
        color: white;
        margin: 0;
        padding: 0;
        background-image: url("admin/img/bg.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        background-position: ;
        width: 100%;
        height: 100%;
        /*height: calc(100%-100px);*/
      }
  .contact{
    width:500px;
    margin: auto;
    margin-top: 20%;
    font-weight: bold;
    font-size:20px;
  }
  input[type=text],input[type=submit]{
    font-size: 20px;
    border-radius: 5px;
  }
  input[type=text]{
    outline:none;
    border: none;
    padding: 10px 0px;
	width: 100%;
  }
  textarea{
	width:100%;
    border: none;
    outline: none;
    height: 150px;
  }
  input[type=submit]{

    color: white;
    font-weight: bold;
    background-color: #2c3e50;
    margin-top:10px;
    padding: 10px;
    width: 150px;
  }
  h1{
    font-weight: bold;
    font-size:50px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }
</style>

<div class="contact">
  <h1>
    Contact me
  </h1>
  <form action="contact.php" method="POST">
    Name
    <input type="text" name="name">
    Email
    <input type="text" name="email">
    Messege
    <textarea name="msg"></textarea>
    <input type="submit">
  </form>
</div>

<?php require_once("temp-part/footer.php"); ?>