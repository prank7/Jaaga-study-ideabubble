<?php
session_start();
$con=mysql_connect("localhost","idea","idea") or die(mysql_error());
$db=mysql_select_db("idea") or die(mysql_error());

if(isset($_POST['submit']))
{

$email1=$_POST['email'];
$pass2=$_POST['pass'];
$tab=mysql_query("select * from user where email='".$email1."' AND password ='".$pass2."'");

$row=mysql_fetch_array($tab);

if(isset($row['name']))
{
 $_SESSION["username"]=$row['name'];
 $_SESSION["userid"]=$row['id'];
 
 header("Location:./item");
 }


 else 
 {
  
 $msg="invalid user";
 }

}


?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Jaaga Study Idea Bubble : Log In</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <div class="container">
      <h1>Jaaga Study Idea Bubble</h1>
      <br>
      <div class="well">

      <form class="form-signin" role="form" action="." method="POST">
        <h2 class="form-signin-heading" align="center">Get a Access</h2>
        <br>
        <input type="email" class="form-control" placeholder="Email address" required autofocus name="email">
        <input type="password" class="form-control" placeholder="Password" required name="pass">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <?php if(isset($msg))
        {
          echo "<p style='color:red';>To login, either be one among us or Hack it!</p>";
        }
        ?>
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Log in</button>
        <br>
      </form>
      </div>

      <div class="footer">
       <p> Made in Banjarapalya </p>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>








