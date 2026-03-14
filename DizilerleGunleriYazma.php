<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Dizi Tanımlama</title>
</head>
<body>

<?php

$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");

echo "<pre>";
foreach ($gunler as $eleman)
{
    echo $eleman."<br>";
}

//print_r($gunler);

?>

</body>
</html>