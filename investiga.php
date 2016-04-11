 
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

         

         <!-- Example in bootstrap of tables, http://getbootstrap.com/examples/dashboard/# -->

            <button type="button" class="btn btn-default" aria-label="Left Align">

 Add Category <span class="glyphicon glyphicon-plus-sign"></span>
</button>

          <button type="button" class="btn btn-default" aria-label="Left Align" style="background-color:#428bca; color: #fff;">

 Add Task <span class="glyphicon glyphicon-plus-sign"></span>
</button>
<br/><br/>
 <p>Unfinished Tasks <span class="badge">7</span></p>
<br/>

<!-- Form Area -->

<form>

<fieldset class="form-group">
    <label for="exampleSelect1">Seleccione Categoría:</label>

    <select class="form-control" id="exampleSelect1">
    <?php
         $showme = new crudmum;
         $showme->read('trackboards', 'priority');

    // output data of each row
while($fila2 = $showme->fila){
      ?>
      <option><?php echo $showme->fila["sub_cat"]; ?></option>
      <?php } ?>
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

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

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
                  <td>-</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>29/03/2016</td>
                  <td>Version Control</td>
                  <td>Learn last shit of Git, before closing Plazti account for a while.</td>
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>29/03/2016</td>
                    <td>BackEnd</td>
                  <td>Think about Classes and objetcts to use with PHP::http://goo.gl/tnMwE</td>
                      <td>Normal</td>
                  <td>Not Yet</td>
                   <td>-</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>29/03/2016</td>
                  <td>Version Control</td>
                  <td>Can git save databases, if so how? and Checkout WP video in PLatzi</td>
                      <td>High</td>

                  <td>Not Yet</td>
                   <td>-</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>29/03/2016</td>
                  <td>BackEnd</td>
                  <td>Implement DB in here and some CRUD shit</td>
                      <td>Normal</td>
                  <td>Not Yet</td>
                   <td>-</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>29/03/2016</td>
                  <td>UI</td>
                  <td>Check Responsive UI in this project, menus and tables not responsive</td>
                  
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td>
                </tr>
           
                 <tr>
                  <td>7</td>
                  <td>30/03/2016</td>
                  <td>CSS</td>
                  <td>Start doing some Less and Grunt tasks with this App</td>
                  
                      <td>High</td>
                  <td>Not Yet</td>
                   <td>-</td>
                </tr>    
              </tbody>
            </table>
          </div>
     </div>




  <?php

include("includes/footer.php");

  ?>