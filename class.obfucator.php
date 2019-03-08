<?php
class ardzz_obfuscator{
	function UnObfuscate($str){
		preg_match_all("/\[(.*?)\]/", $str, $match);
		$keys = str_split("0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ/", "1");
		$output = null;
		foreach($match[1] as $str){
			foreach($keys as $key => $value){
				if ($str == $key) {
					$output .= $value;
				}
			}
		}
		if ($output) {
			return $output;
		}else{
			return false;
		}
	}
	function Obfuscate($string, $var_name){
		$str = "0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/";
		$output = NULL;
		$var_name = "\${$var_name}";
		$setboi = [
		"I still see your shadows in my room",
		"I feel a-okay", 
		"OH baby i don't understand this",
		"Loving you is danger",
		"You are never mine",
		"OH !mine !mine",
		"You make my heart break",
		"You make my heart break, again",
    "Ku jek ruh bayangmu nang kamar",
		];
		foreach(str_split($string,1) as $input){
			foreach (str_split($str, 1) as $key => $value) {
				$syetboi = $setboi[array_rand($setboi)];
				if ($input == $value) {
					$settboii = $setboi[array_rand($setboi)];
					$output[] .= "./* -- {$syetboi} --*/(NULL)/* -- {$settboii} -- */.{$var_name}/*//*/[{$key}]./*/-'-/*/(NULL)";
				}
			}
		}
		return "((NULL)".implode("", $output).")";
	}
}
?>
