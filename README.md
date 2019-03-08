# [Obfuscator Syetboi](https://github.com/ardzz/Obfuscator)
### Cara Penggunaan
#### I. Melakukan Obfuscate (*Encode*)
1. Panggil *method **Obfuscate*** yang ada di *class **ardzz_obfuscator***
2. Set argumen di method ***Obfuscate*** ` ardzz_obfuscator::Obfuscate("string", "nama_variabel");`
3. Print output

**Masih bingung? silahkan cek kode dibawah**

```php
<?php
require "class.obfuscator.php"; // panggil file class.obfuscator.php
$key = "0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/"; // default key - bisa diganti sendiri
$obfuscator = new ardzz_obfuscator();
$output = $obfuscator->Obfuscate("string", "key");
echo $output;
?>
```
#### II. Melakukan Unobfuscate (*Decode*)
1. Panggil *method **UnObfuscate*** yang ada di *class **ardzz_obfuscator***
2. Set argumen di method ***UnObfuscate*** `ardzz_obfuscator::UnObfuscate("encoded_string");`
3. Print output

**Masih bingung? silahkan cek kode dibawah**

```php
<?php
require "class.obfuscator.php"; // panggil file class.obfuscator.php
$key = "0123456789abcdefghijklmnopqrstuvwxyz;`</>- |_=,.:ABCDEFGHIJKLMNOPQRSTUVWXYZ\/"; // default key - bisa diganti sendiri
$obfuscator = new ardzz_obfuscator();
$encode = "((NULL)./* -- I still see your shadows in my room --*/(NULL)/* -- Jek ruh bayangmu nang kamar -- */.$key/*//*/[14]./*/-*-/*/(NULL)./* -- OH baby i don't understand this --*/(NULL)/* -- OH baby i don't understand this -- */.$key/*//*/[33]./*/-*-/*/(NULL)./* -- You make my heart break --*/(NULL)/* -- You make my heart break -- */.$key/*//*/[10]./*/-*-/*/(NULL)./* -- You make my heart break --*/(NULL)/* -- OH !mine !mine -- */.$key/*//*/[22]./*/-*-/*/(NULL)./* -- Jek ruh bayangmu nang kamar --*/(NULL)/* -- You make my heart break, again -- */.$key/*//*/[25]./*/-*-/*/(NULL)./* -- You make my heart break, again --*/(NULL)/* -- I still see your shadows in my room -- */.$key/*//*/[21]./*/-*-/*/(NULL)./* -- Loving you is danger --*/(NULL)/* -- I feel a-okay -- */.$key/*//*/[14]./*/-*-/*/(NULL))";
$output = $obfuscator->UnObfuscate($encode);
echo $output;
```
