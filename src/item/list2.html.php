<!DOCTYPE html>
<html lang="en">
<html>
<head>
<title>Home</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

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
               
                <button type="submit" class="btn btn-success" style="font-family: verdana;">Log Out</button> 
                
          </form>
      </div>
      
      </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">

      <form style="background-color:grey; padding:20px; float:right; width:450px" action="." method="POST">
        <input style="padding:7px;" type="text" placeholder="Add Items" name="itemname">

      

        <select style="padding:6px" name="category">

          <option value="Breakfast">Breakfast</option>
          <option value="Lunch">Lunch</option>
          <option value="Snacks">Snacks</option>
          <option value="Dinner">Dinner</option>

        </select>

        <input type="submit" style="padding:6px;" name="action" value="Submit">

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

              <div class="well" style="padding:5px;">
                 </span><a href='?upvote=".$itemInBreakfast['id']."'class='glyphicon glyphicon-hand-up' title='upvote it, If it tempts you!'>a</a> <span></span> 
              </div>



          </div>
        </div>
 
   
        <div class="col-lg-3">
          <div class="well">

            <h2>Lunch</h2>

              <div class="well" style="padding:5px;">
                
                <div class="well" style="padding:5px;">
                </div>

              </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="well">

            <h2>Snacks</h2>

              <div class="well" style="padding:5px;">
              

              </div>

          
              </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="well">

            <h2>Dinner</h2>

              <div class="well" style="padding:5px;">
                <div class="well" style="padding:5px;">
                </div>

          
              </div>
          </div>
        </div>


    </div>
  </div>


  
 
 

  
</body>

</html> 