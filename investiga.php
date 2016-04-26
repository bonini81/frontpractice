 
<?php
include("functions.php");
include("includes/header.php"); 
?>

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><span class="glyphicon glyphicon-lab"></span> I+D - TrackBoard </h1>

<ol class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#">Tracking</a></li>
  <li class="active">I+D</li>
</ol>

<script language="JavaScript">

function setVisibility(id, visibility) {
document.getElementById(id).style.display = visibility;
}
</script>

         

         <!-- Example in bootstrap of tables, http://getbootstrap.com/examples/dashboard/# -->

     

          <button type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#428bca; color: #fff;" onclick="setVisibility('mueve', 'block');";>

 Add Task <span class="glyphicon glyphicon-plus-sign"></span>
</button>
<br/><br/>
 <p>Unfinished Tasks <span class="badge">7</span></p>
<br/>

<!-- Start Search Area -->

  <div class="col-lg-4" >
    <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button" style="background-color:#428bca; color: #fff;">Go!</button>
      </span>
      <input type="text" class="form-control" placeholder="Busca I+D Shit...">
    <!-- /input-group -->
    </div> </div>
    <br/>

<!-- End Search Area -->

<!-- Form Area -->



<section id="mueve">
<form>

<fieldset class="form-group">
    <label for="exampleSelect1">Seleccione Categoría:</label>

    <select class="form-control" id="exampleSelect1">
    <?php
         $showme = new crudmum($mysqli); 
         $showme->runQuery('intranet_cat', 'categorias' );
         ?>

    </select>
  </fieldset>


 
<fieldset class="form-group">
    <label for="exampleSelect1">Priority:</label>
    <select class="form-control" id="exampleSelect1">
      <option>High</option>
      <option>Middle</option>
      <option>Low</option>
    </select>
  </fieldset>
 

<fieldset class="form-group">
    <label for="exampleSelect1">So?</label>
    <select class="form-control" id="exampleSelect1">
      <option>Done</option>
      <option>In the Freezer</option>
      <option>In Progress</option>
    </select>
  </fieldset>

  <fieldset class="form-group">
    <label for="exampleTextarea">To do:</label>
    <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
  </fieldset>


  <fieldset class="form-group">
    <label for="exampleTextarea">Comments:</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </fieldset>

 

  <button type="submit" class="btn btn-primary" id="hide">Submit</button>
</form>
<br/>
<a href="#" onclick="setVisibility('mueve', 'none');">Hide</a>
</section>

<!-- End Form Area -->

<br/>
<br/ style="clear:both;">

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fecha</th>
                  <th>Categoria</th>
                  <th>To do</th>
                  <th>Priority</th>
                  <th>So?</th>
                  <th>Comments</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>29/03/2016</td>
                  <td>Front</td>
                  <td>Add buttons icons with Bootstrap, get Familiar.</td>
                    <td>Normal</td>
                  <td>Not Yet</td>
                  <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>29/03/2016</td>
                  <td>Version Control</td>
                  <td>Learn last shit of Git, before closing Plazti account for a while.</td>
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>29/03/2016</td>
                    <td>BackEnd</td>
                  <td>Think about Classes and objetcts to use with PHP::http://goo.gl/tnMwE</td>
                      <td>Normal</td>
                  <td>Not Yet</td>
                   <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>29/03/2016</td>
                  <td>Version Control</td>
                  <td>Can git save databases, if so how? and Checkout WP video in PLatzi</td>
                      <td>High</td>

                  <td>Not Yet</td>
                   <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>29/03/2016</td>
                  <td>BackEnd</td>
                  <td>Implement DB in here and some CRUD shit</td>
                      <td>Normal</td>
                  <td>Not Yet</td>
                   <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>29/03/2016</td>
                  <td>UI</td>
                  <td>Check Responsive UI in this project, menus and tables not responsive</td>
                  
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td><td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>
           
                 <tr>
                  <td>7</td>
                  <td>30/03/2016</td>
                  <td>CSS</td>
                  <td>Start doing some Less and Grunt tasks with this App</td>
                  
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td>
                   <td><span class="glyphicon glyphicon-edit" style="color:#428bca;"><a href="#"> Edit</a></td>
                </tr>    
              </tbody>
            </table>
          </div>
     </div>




  <?php

include("includes/footer.php");

  ?>



  