<?php


function setvalue($count)
	{
		if ($count == 9) {
			$value = "010";
		}elseif ($count == 99) {
			$value = "100";
		}elseif ($count > 99) {
			$value = "".($count+1);
		}elseif ($count > 9) {
			$value = "0".($count+1);
		}elseif ($count <= 9) {
			$value = "00".($count+1);
		}
		return $value;
	}

	function set($no,$value){
		
		

		return "PF".$no."".date("dmy")."".$value;;
	}

?>