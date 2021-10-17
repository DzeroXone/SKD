<?php
$kalimat = $_GET["kata"];
$key = $_GET["key"];
for ($i = 0; $i < strlen($kalimat); $i++) {
 $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
 $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
 $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
}
echo "kalimat ASLI : ";
for ($i = 0; $i < strlen($kalimat); $i++) {
 echo $kalimat[$i];
}
echo "<br>";
echo "hasil enkripsi =";
$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) {
 echo $c[$i];
 $hsl = $hsl . $c[$i];
}
echo "<br>";
//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
</div>
<div>
    <a href="dekripsi1.php">Caesar Dekriptor</a>
</div>
</body>
</html>