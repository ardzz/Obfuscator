# [Obfuscator Syetboi](https://github.com/ardzz/Obfuscator)
### Cara Penggunaan
#### I. Melakukan Obfuscate
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
