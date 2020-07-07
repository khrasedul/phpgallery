<?php
require_once("admin/inc/config.php");

?>

<html>
  <head>
    <title>PHP Gallery</title>
   <!-- add font-awosome css -->
    <style>
      body{
        margin: 0;
        padding: 0;
        font-family: sans;
        background-color: rgba(0,0,0,0.1);
        width: 100%;
        text-decoration: none;
      }
      header{
        position: sticky;
        z-index: 1000;
        padding:0 50px;
        height: 150px;
        overflow: hidden;
        box-sizing: border-box;
        background-color: #2c3e50;
        border-bottom-color: #ddd;
        width: 100%;
      }
      header span{
        font-family: arial;
        font-weight: bold;
        font-size: 50px;
		line-height: 150px;
        float: left;
        color: #eee;
      }
      header ul{
        margin: 0;
        padding: 0;
        line-height: 150px;
        float: right;
        list-style-type: none;
      }
      header ul li{
        display: inline;
        padding-right: 20px;
      }
      header ul li a{
        color: white;
        background-color: teal;
        border-radius: 3px;
        padding: 7px 13px;
        font-family: arial bold;
        font-size: 20px;
        text-decoration: none;
      }
      .gallery{
        display: absolute;
		padding: 50px;
        box-sizing: border-box;
      }
      .card{
        overflow: hidden;
		padding: 10px;
        width: 30%;
        height: ;
        float: left;
        background-color: white;
        border: 1px solid rgba(0,0,0,0.4);
        margin: 10px;
        box-sizing: border-box;
      }
      .card img{
        width: 100%;
        box-sizing: border-box;
        border-radius: 2px;
      }
      .card h3{
        padding: 5px;
        margin: 0;
		border-bottom: 1px solid #ddd;
        box-sizing: border-box;

      }
      .card h5{
        padding: 2px;
        margin: 0;
        box-sizing: border-box;
      }
      .copyright{
        font-size:20px;
        font-weight: bolder;
        color: yellow;
        right:1px;
        bottom:10px;
        position: absolute;
      }
    </style>
  </head>
  <body>
      <span class="copyright">&copy; 2019-<?php echo date(Y); ?> || Developed by Rasedul Hasan</span>
    <header>
      <span>GalleryX</span>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="admin/">Admin</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </header>