<?php

 $mysqli = new mysqli("localhost", "root", "", "intranetpugle");


class crudmum {

	//if you put var $amaia means its public by default

	var $maincatc;
	var $subcatc;
	var $to_do;
	var $comentac;
	var $prioc;
	var $donec;
	public $insercat;
	public $categorias;
	
	public $dbchoza;
	public $data;
	
	//Private Stuff
	private $mysqli;
	//private $insercat2; 

  function __construct($mysqli) {
    
    $this->mysqli = $mysqli;
 
  }

	function inserta ($maincatc2, $subcatc2, $to_do2, $comentac2, $prioc2, $donec2) {

			$this->maincatc = $maincatc2; $this->subcatc = $subcatc2; $this->to_do = $to_do2; $this->comentac = $comentac2; 
			$this->prioc = $prioc2; $this->donec = $donec2;

			$sql = "INSERT INTO trackboards (main_cat, sub_cat, to_do, comments, priority, done ) 
			VALUES ( $this->maincatc, $this->subcatc, '$this->to_do', '$this->comentac', '$this->prioc', '$this->donec')";

  			
			mysqli_query($sql); 
	}


function insertacats ($insercat2) {

			$this->insercat = $insercat2; 

			$sql = "INSERT INTO categorias (intranet_cat) 
			VALUES ( '$this->insercat')";

  			
			    $stmt = $this->mysqli->prepare($sql);
			     $stmt->execute();
	}



	function runQuery($data2, $dbchoza2)

  {

  	$this->dbchoza = $dbchoza2; $this->data = $data2;
    $query = "SELECT $this->data FROM $this->dbchoza ";

    $stmt = $this->mysqli->prepare($query);
    $stmt->bind_result($r);
    $stmt->execute();

    while($stmt->fetch())
    {
      
          echo "<option>" . $r . "</option>";
    }
  
  }

};


/*
$investiga = new crudmum;

$maitanesex = 1;
$amaiarascon = 2;
$sharonstone = "Fuck Maitane";
$diana = "Diana Anthony";
$bitch = "Cindy Crawford";
$babe = "Leonora";
$babe2 = "Laura VanBabe";
$babe3 = "Anastasia Vizuete";

$investiga->inserta($maitanesex , $amaiarascon, $sharonstone, $diana, $bitch, $babe, $babe2, $babe3);
*/

//OOP Manual used: http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
// other good examples http://www.tutorialspoint.com/php/php_object_oriented.htm






?>


