 
<?php
include("includes/header.php"); 
?>

 <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">I+D - TrackBoard</h1>

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

 Add Book <span class="glyphicon glyphicon-plus-sign"></span>
</button>

<br/><br/>


          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Categoria</th>
                  <th>Priority</th>
                  <th>Done?</th>
                  <th>Comments</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Sobreviviendo a Pablo Escobar</td>
                  <td>Life Skills</td>
                  <td>Normal</td>
                    <td>Yes - Enero</td>
                  <td>Cool, Manso como una paloma, astuto como una serpiente.</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Sangre, Traicion y Muerte</td>
                  <td>Business</td>
                  <td>Normal</td>
                  <td>Yes - Febrero</td>
                  <td>Awesome how to face fear and business.</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Mindset</td>
                    <td>LifeSkills</td>
                  <td>Normal</td>
                      <td>Not Yet</td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>29/03/2016</td>
                  <td>Version Control</td>
                  <td></td>
                      <td>High</td>

                  <td>Not Yet</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>29/03/2016</td>
                  <td>BackEnd</td>
                  <td></td>
                      <td>Normal</td>
                  <td>Not Yet</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>29/03/2016</td>
                  <td>UI</td>
                  <td></td>
                  
                      <td>High</td>
                  <td>Not Yet</td>
                </tr>
           
        
              </tbody>
            </table>
          </div>
     </div>




  <?php

include("includes/footer.php");

  ?>