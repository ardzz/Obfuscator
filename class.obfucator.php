<?php

/**
*
* @author Ardhana [Ardzz]
* @package Class-Obfuscator-PHP
* @link fb.com/aardzz
*
**/

$key = "0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/";

class ardzz_obfuscator{
	function UnObfuscate($str){
		global $key;
		preg_match_all("/\[(.*?)\]/", $str, $match);
		$keys = str_split($key, "1");
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
		global $key;
		$str = $key;
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

// example 

$str = "((NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[10]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[27]./*/-'-/*/(NULL)./* -- I still see your shadows in my room --*/(NULL)/* -- You are never mine -- */.$key/*//*/[13]./*/-'-/*/(NULL)./* -- I feel a-okay --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[35]./*/-'-/*/(NULL)./* -- I feel a-okay --*/(NULL)/* -- You are never mine -- */.$key/*//*/[35]./*/-'-/*/(NULL)./* -- I still see your shadows in my room --*/(NULL)/* -- You are never mine -- */.$key/*//*/[44]./*/-'-/*/(NULL)./* -- You make my heart break, again --*/(NULL)/* -- You make my heart break -- */.$key/*//*/[24]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[11]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[15]./*/-'-/*/(NULL)./* -- You make my heart break, again --*/(NULL)/* -- You are never mine -- */.$key/*//*/[30]./*/-'-/*/(NULL)./* -- You are never mine --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[28]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You are never mine -- */.$key/*//*/[12]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- OH !mine !mine -- */.$key/*//*/[10]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[29]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You are never mine -- */.$key/*//*/[24]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- OH baby i don't understand this -- */.$key/*//*/[27]./*/-'-/*/(NULL))";

$ardzz_obfuscator = new ardzz_obfuscator();
/*
	 -- SAMPLE -- OBFUSCATE -- (ENCODE) --
	 
echo $ardzz_obfuscator->UnObfuscate($str, "key").PHP_EOL;


	 -- SAMPLE -- UNOBFUSCATE -- (DECODE) --

echo $ardzz_obfuscator->Obfuscate("example", "key").PHP_EOL;

*/

echo $ardzz_obfuscator->Obfuscate("example", "key").PHP_EOL;
?>
