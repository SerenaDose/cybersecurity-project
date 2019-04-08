<?php

class PwdGenerator{

	function randomPassword($keyVal) {

			
		$returnString = "";
		
		if ($keyVal == 8){
			$returnString .= $this->generateRandomPassword(2, $keyVal);
		}else if (($keyVal >= 9) && ($keyVal <= 12)){
			$returnString .= $this->generateRandomPassword(3, $keyVal);
		}else if (($keyVal >= 13) && ($keyVal <= 16)){
			$returnString .= $this->generateRandomPassword(4, $keyVal);
		}else{
			$returnString .= "Devi inserire un valore tra 8 e 16";
		}
	    return $returnString;  //ritorno il valore della password generata
		
	}

	function generateRandomPassword($seed, $keyVal){

		$passwordArray = array();
		
		for ($i = 0; $i <= $seed; $i++){

			array_push ($passwordArray , $this->randomMaiuscola(),$this->randomMinuscola(),$this->randomNumero(),$this->randomCarattereSpeciale());
	
		}

		$substring = $this->cut($passwordArray,$keyVal);
		shuffle($substring);
		$password = implode("",$substring);

		return $password;
	}

	function cut($array,$keyVal){
		$result = array();

		for ($i=0; $i < $keyVal; $i++) { 
			array_push ($result, $array[$i]);
		}
		return $result;
	}

	function randomMaiuscola(){
		$maiuscola = "";
		return $maiuscola.chr(mt_rand(65,90));
	}

	function randomMinuscola(){
		$minuscola = "";
		return $minuscola.chr(mt_rand(97,122));
	}

	function randomNumero(){
		$numero = "";
		return $numero.chr(mt_rand(48,57));
	}

	function randomCarattereSpeciale(){

		$arrayCaratteriSpeciali = array ("!","#","$","%","&","*","*", "-", "/","@","[","]", "_");

		$carattereSpeciale = $arrayCaratteriSpeciali[mt_rand(0,count($arrayCaratteriSpeciali)-1)];
		return $carattereSpeciale;
	}
}

?>



