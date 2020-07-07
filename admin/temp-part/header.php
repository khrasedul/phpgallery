<html>
  <head>
    <title>Upload Pic | PHP App</title>
    <style>
      body{
        margin: 0;
        padding: 0;
        background-image: url("img/bg.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        background-position: ;
        width: 100%;
        height: 100%;
        /*height: calc(100%-100px);*/
      }
      .main{
        width: 400px;

        height: 550px;
        margin: auto;
        margin-top: 20%;
        background-color: ;
        color: yellow;
        font-weight: bold;
        border-radius: 5px;
      }
      h1{
        border-bottom: 1px solid #ddd;
        background-color: ;
        text-align: center;
        padding: 15px 0px;
        margin: 0;
        margin-bottom: 50px;
        border-radius: 5px;
      }
      input[type=text],input[type=date],input[type=file]	{
        padding: 10px 0px;
        border: none;
        outline: none;
        border-radius: 20px;
        background-color: ;
        width: 100%;
		margin-bottom: 15px;
        font-family: sans;
        font-weight: bolder;
		font-size: 20px;
      }
      input[type=submit]{
        padding: 15px 0px;
        border: none;
        outline: none;
        border-radius: 20px;
        background-color: ;
        width: 30%;
		margin-bottom: 15px;
        background-color: #2c3e50;
        color: #fff;
        font-weight: bold;
      }
      header{
        height: 100px;
        background-color: #2c3e50;
        padding: 30px;
        width: 100%;
      }
      span{
        line-height: 100px;
        font-size:50px;
        font-weight: bolder;
        color: white;

      }
      header ul{
        list-style-type: none;
        float:right;
        line-height: 100px;
      }
      header ul li{
        display: inline;
        margin-left: 10px;

      }
      header ul li a{
        padding: 10px 13px;
        color: white;
        background-color: teal;
        border-radius:3px;
        text-decoration: none;
        font-weight: bold;
      }
      .copyright{
        font-size:20px;
        font-weight: bolder;
        color: yellow;
        right:10px;
        bottom:10px;
        position: absolute;
      }
    </style>
  </head>
  <body>
    <span class="copyright">&copy; 2019-<?php echo date(Y); ?> || Developed by Rasedul Hasan</span>
    <header>
		<span>DesignX</span>
      <ul>
        <li><a href="../index.php">View Site</a></li>
        <li><a href="mail.php">Mail</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </header>