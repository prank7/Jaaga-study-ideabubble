<?php
include '../db.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Home</title>
<link href=".\css\bootstrap.css" rel="stylesheet">

<style>
body {
  padding-top: 60px;
}
@media (max-width: 979px) {
  body {
    padding-top: 0px;
  }
}
/*.container3
{
 
  width:1600px;
}
.container1{

  float:left;
  width: 800px;
}

.container2{

  float:left;
  width: 800px;
}*/

</style> 
</head>


<body>
<!-- This is the NAV BAR at the top of the page-->
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
       
       <div class="collapse navbar-collapse">
          
          <form class="navbar-form navbar-right" role="form">
               
                <button type="submit" class="btn btn-success" style="font-family: verdana;"><a href="../logout" style="text-decoration:none; color:white;">Log Out</a></button> 
                
          </form>
      </div>
      
      </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <form style="background-color:grey; padding:20px; float:right; width:450px" action="." method="post"> 

        <input type="name" style="padding:7px;" placeholder="Add-Item" name="itemname">      

        <select style="padding:6px" name="category">

          <option value="Breakfast">Breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Snacks">Snacks</option>
          <option value="Dinner">Dinner</option>

        </select>

        <input type="submit" style="padding:6px;" name="action" value="Update">

      </form>
    </div>
    </div>
  </div>
<br>
<br>

  



  

  <div class="container" >
    <div class="row">
        <div class="col-lg-3">
          <div class="well">

            <h2>Breakfast</h2>
<?php 
foreach ($itemsInBreakfast as $itemInBreakfast): 
  $isUpvoted=0;
  try
  {
    $sqlvote="SELECT upvote FROM vote WHERE itemid='".$itemInBreakfast['id']."' and userid='".$_SESSION['userid']."'";
    $resultofvote=$pdo->query($sqlvote);
  }
  catch(PDOException $e)
  {
    $error= "Unabel to get the data";
    echo $error;
    exit();
  }
  foreach($resultofvote as $rowofvote)
  {
    $isUpvoted=$rowofvote['upvote'];
  } ?>
              <div class="well" style="padding:5px;">
                <?php 
                if($isUpvoted==1) 
                 { echo "<a style='align:left; color:red;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";}
                else{
                  echo "<a href='?upvote=".$itemInBreakfast['id']."' style='align:left; color:green;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'>a</a>";
                }?>&nbsp;<span><?php echo $itemInBreakfast['count']."</span>&nbsp;<span>".$itemInBreakfast['itemname']."</span>";?>
              </div>
<?php endforeach; ?>

          </div>
        </div>
 
   
        <div class="col-lg-3">
          <div class="well">

            <h2>Lunch</h2>

<?php 
foreach ($itemsInLunch as $itemInLunch): 
  $isUpvoted=0;
  try
  {
    $sqlvote="SELECT upvote FROM vote WHERE itemid='".$itemInLunch['id']."' and userid='".$_SESSION['userid']."'";
    $resultofvote=$pdo->query($sqlvote);
  }
  catch(PDOException $e)
  {
    $error= "Unabel to get the data";
    echo $error;
    exit();
  }
  foreach($resultofvote as $rowofvote)
  {
    $isUpvoted=$rowofvote['upvote'];
  } ?>
              <div class="well" style="padding:5px;">
                <?php 
                if($isUpvoted==1) 
                 { echo "<a style='align:left; color:red;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";}
                else{
                  echo "<a href='?upvote=".$itemInLunch['id']."' style='align:left; color:green;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'></a>";
                }?>&nbsp;<span><?php echo $itemInLunch['count']."</span>&nbsp;<span>".$itemInLunch['itemname']."</span>";?>
              </div>
<?php endforeach; ?>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="well">

            <h2>Snacks</h2>

<?php 
foreach ($itemsInSnacks as $itemInSnacks): 
$isUpvoted=0;
  try
  {
    $sqlvote="SELECT upvote FROM vote WHERE itemid='".$itemInSnacks['id']."' and userid='".$_SESSION['userid']."'";
    $resultofvote=$pdo->query($sqlvote);
  }
  catch(PDOException $e)
  {
    $error= "Unabel to get the data";
    echo $error;
    exit();
  }
  foreach($resultofvote as $rowofvote)
  {
    $isUpvoted=$rowofvote['upvote'];
  } ?>
              <div class="well" style="padding:5px;">
                <?php 
                if($isUpvoted==1) 
                 { echo "<a style='align:left; color:red;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";}
                else{
                  echo "<a href='?upvote=".$itemInSnacks['id']."' style='align:left; color:green;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";
                }?>&nbsp;<span><?php echo $itemInSnacks['count']."</span>&nbsp;<span>".$itemInSnacks['itemname']."</span>";?>
              </div>
<?php endforeach; ?>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="well">

            <h2>Dinner</h2>

<?php 
foreach ($itemsInDinner as $itemInDinner): 
$isUpvoted=0;
  try
  {
    $sqlvote="SELECT upvote FROM vote WHERE itemid='".$itemInDinner['id']."' and userid='".$_SESSION['userid']."'";
    $resultofvote=$pdo->query($sqlvote);
  }
  catch(PDOException $e)
  {
    $error= "Unabel to get the data";
    echo $error;
    exit();
  }
  foreach($resultofvote as $rowofvote)
  {
    $isUpvoted=$rowofvote['upvote'];
  } ?>
              <div class="well" style="padding:5px;">
                <?php 
                if($isUpvoted==1) 
                 { echo "<a style='align:left; color:red;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";}
                else{
                  echo "<a href='?upvote=".$itemInDinner['id']."' style='align:left; color:green;' type='button' class='btn btn-default btn-sm glyphicon glyphicon-hand-up'> </a>";
                }?>&nbsp;<span><?php echo $itemInDinner['count']."</span>&nbsp;<span>".$itemInDinner['itemname']."</span>";?>
              </div>
<?php endforeach; ?>
          </div>
        </div>


    </div>
  </div>


  
 
 

  
</body>

</html> 