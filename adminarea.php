 
<?php
include("functions.php");
include("includes/header.php"); 
// Example http://themifycloud.com/demos/templates/joli/
//http://www.strapui.com/?utm_source=startangular&utm_medium=startangular&utm_campaign=StrapUI
?>




 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="glyphicon glyphicon-lab"></span>Admin Area</h1>

<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li class="active">Admin Area</li>
</ol>

         

         <!-- Example in bootstrap of tables, http://getbootstrap.com/examples/dashboard/# -->

            <button type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#428bca; color: #fff;">
           
 Add Main Categories <span class="glyphicon glyphicon-plus-sign"></span>
</button>

<!-- Start Sub Categories -->
<br/><br/>
  <button type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#428bca; color: #fff;">
           
 Add Sub Categories <span class="glyphicon glyphicon-plus-sign"></span>
</button>
<br/><br/>
  
<!-- END Sub Categories -->

<!-- Single button -->


<div class="dropdown">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dLabel">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>



<br/><br/>
<form  action="includes/send.php" method="post">
  <fieldset class="form-group">
    <label for="exampleTextarea">To do:</label>
    <textarea class="form-control" id="exampleTextarea" rows="2" name="categorias"></textarea>
  </fieldset>
  <button type="submit" class="btn btn-primary" id="hide">Submit</button>
</form>
<br/>
<p class="divide"></p>
<br/>




<?php
include("includes/footer.php");
?>