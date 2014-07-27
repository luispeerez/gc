<?php 
	function encriptarMensaje($mensaje,$llave = 5){
		$charArray = str_split($mensaje);
		$temp = 0;
        for($i=0;$i<sizeof($charArray);$i++){ 
            //array[i]=(char)(array[i]+(char)5); 
            $temp = ord($charArray[$i]) + $llave;
            $charArray[$i] = chr($temp);

		} 
		$resultado = implode($charArray);
		return $resultado;
	}

	function desencriptarMensaje($mensaje,$llave = 5){
		$charArray = str_split($mensaje);
		$temp = 0;
        for($i=0;$i<sizeof($charArray);$i++){ 
            $temp = ord($charArray[$i]) - $llave;
            $charArray[$i] = chr($temp);

		} 
		$resultado = implode($charArray);
		return $resultado;
	}	
?>