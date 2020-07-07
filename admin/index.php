<?php
session_start();
require_once("inc/config.php");
if(isset($_SESSION['email'])){
  header("Location: upload.php");
}

if(isset($_POST['user'],$_POST['pass'])){
  $email = $_POST['user'];
  $pass = $_POST['pass'];

  $login_query = "select * from user where email ='$email';";
  $login_query_excute = mysqli_query($con,$login_query);
  $user_count = mysqli_num_rows($login_query_excute);

}
?>
<html>
  <head>
    <title>Admin || php app</title>
    <style>
      body{
        margin: 0;
        padding: 0;
        background-image: linear-gradient(rgba(255,255,255,0.2),rgba(255,255,255,0.1)), url('img/bg.jpg');
        color: #ddd;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .main{
        padding:50px;
        margin: auto;
        width: 400px;
        height:300px;
        border-radius: 5px;
        background-color: rgba(0,0,0,0.3);
        box-shadow: 1px rgba(0,0,0,0.1);
        margin-top: 50%;
        text-align: left;
      }
      h1{
        color: black;
        border-radius: 5px;
        text-align: center;
        background-color: #bbb;
        margin: 0;
        padding: 10px 0px;
        margin-bottom: 40px;
        box-sizing: border-box;
      }
      input[type=text]{
        font-family: sans;
        font-weight: bold;
        font-size: 25px;
        background: ;
        margin-top: 15px;
        border: 1px solid white;
        outline: none;
        padding: 15px 0px;
        border-radius: 25px;
        width: 100%;
        box-sizing: border-box;
      }
      input[type=submit]{
        color: #ddd;
        font-weight: bold;
        background-color: #2c3e50;
        border: 1px solid white;
        outline: none;
        border-radius: 25px;
        text-align: center;
        width: 150px;
        box-sizing: border-box;
        margin-top: 25px;
        padding: 12px 0px;
        font-size: 20px;
      }
      .red_notice{
        padding-left: 5px;
        margin-bottom:10px;
        border-radius: 5px;
        margin: 0;
        background-color: red;
      }
    </style>
  </head>
  <body>
    <div class="main">
      <h1>
        Login System
      </h1>
<?php
      if(isset($_POST['user'])){
        if($user_count>0){
          $login_data = mysqli_fetch_assoc($login_query_excute);
          $password = $login_data['pass'];

			if($password == $pass){
              $_SESSION['email'] = $login_data['email'];

        	header("Location: upload.php");
            }else{
              echo "<h2 class='red_notice'> Password Wrong!</h2>";
            }
        }else{
          echo "<h2 class='red_notice'>Email not found!</h2>";
        }
      }

?>
      <form action="" method="post">
		<input type="text" name="user" placeholder="       Username" required>
		<input type="text" name="pass" placeholder="       Password" required>
      	<input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>