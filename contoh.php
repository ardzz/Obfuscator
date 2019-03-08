<?php 
require "class.obfuscator.php";
$key = "0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/";
$str = "((NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[10]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[27]./*/-'-/*/(NULL)./* -- I still see your shadows in my room --*/(NULL)/* -- You are never mine -- */.$key/*//*/[13]./*/-'-/*/(NULL)./* -- I feel a-okay --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[35]./*/-'-/*/(NULL)./* -- I feel a-okay --*/(NULL)/* -- You are never mine -- */.$key/*//*/[35]./*/-'-/*/(NULL)./* -- I still see your shadows in my room --*/(NULL)/* -- You are never mine -- */.$key/*//*/[44]./*/-'-/*/(NULL)./* -- You make my heart break, again --*/(NULL)/* -- You make my heart break -- */.$key/*//*/[24]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[11]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[15]./*/-'-/*/(NULL)./* -- You make my heart break, again --*/(NULL)/* -- You are never mine -- */.$key/*//*/[30]./*/-'-/*/(NULL)./* -- You are never mine --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[28]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You are never mine -- */.$key/*//*/[12]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- OH !mine !mine -- */.$key/*//*/[10]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- Loving you is danger -- */.$key/*//*/[29]./*/-'-/*/(NULL)./* -- OH !mine !mine --*/(NULL)/* -- You are never mine -- */.$key/*//*/[24]./*/-'-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- OH baby i don't understand this -- */.$key/*//*/[27]./*/-'-/*/(NULL))";
$ardzz_obfuscator = new ardzz_obfuscator();
$ardzz_obfuscator->key = $key;
/*
	 -- SAMPLE -- OBFUSCATE -- (Decode) --
	 
echo $ardzz_obfuscator->UnObfuscate($str, "key").PHP_EOL;


	 -- SAMPLE -- UNOBFUSCATE -- (Encode) --

echo $ardzz_obfuscator->Obfuscate("example", "key").PHP_EOL;

*/

echo $ardzz_obfuscator->Obfuscate("example", "key").PHP_EOL;

?>
