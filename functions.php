<?php

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   mysql_connect($dbhost, $dbuser, $dbpass);
   mysql_select_db('intranetpugle');
 

class crudmum {

	//in OOP vars have to be called this way var $

	var $maincatc;
	var $subcatc;
	var $to_do;
	var $comentac;
	var $prioc;
	var $donec;
	public $resu;
	public $fila;
//Calling variables inside a class function http://stackoverflow.com/questions/21717053/call-variable-from-a-function-thats-inside-a-class


		//Starting the constructor man!

		/*public function __construct() {
		

		$maincatc = 0;
		$subcatc = 0;
		$to_do = "";
		$comentac = "";
		$prioc = "";
		$donec = "";
	
	}*/



	function inserta ($maincatc2, $subcatc2, $to_do2, $comentac2, $prioc2, $donec2) {

			$this->maincatc = $maincatc2; $this->subcatc = $subcatc2; $this->to_do = $to_do2; $this->comentac = $comentac2; 
			$this->prioc = $prioc2; $this->donec = $donec2;

			$sql = "INSERT INTO trackboards (main_cat, sub_cat, to_do, comments, priority, done ) 
			VALUES ( $this->maincatc, $this->subcatc, '$this->to_do', '$this->comentac', '$this->prioc', '$this->donec')";

  			
			mysqli_query($sql); 
	}

	function read ($dbchoza2, $data2) {

			$this->dbchoza = $dbchoza2; $this->data = $data2;

			$sql = "SELECT $this->data FROM $this->dbchoza";
			
			$resu = mysql_query($sql);
			$fila = mysql_fetch_array($resu);
			//return $fila;


	}

	/*function getman () {


		$sql = "INSERT INTO trackboards (main_cat, sub_cat, to_do, comments, priority, done ) 
			VALUES ( $this->maincatc, $this->subcatc, '$this->to_do', '$this->comentac', '$this->prioc', '$this->donec')";

  			
			mysql_query($sql); 

				
	}*/

}



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


//OOP Manual used: http://code.tutsplus.com/tutorials/object-oriented-php-for-beginners--net-12762
// other good examples http://www.tutorialspoint.com/php/php_object_oriented.htm

mysql_close();

?>