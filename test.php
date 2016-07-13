 
<?php
include("functions.php");
include("includes/header.php"); 

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


<script>
  $(function() {
    $( "#slider-vertical" ).slider({
      orientation: "horizontal",
      range: "min",
      min: 0,
      max: 100,
      value: 60,
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.value );
      }
    });
    $( "#amount" ).val( $( "#slider-vertical" ).slider( "value" ) );
  });
  </script>

<br/><br/>

<p>
  <label for="amount">Progreso:</label>
  <input type="text" id="amount" readonly style="border:0; color:#428bca; font-weight:bold;">
</p>
 
<div id="slider-vertical" style="height:10px;"></div>
   


<?php
include("includes/footer.php");
?>