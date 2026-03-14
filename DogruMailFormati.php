<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$formatim="#^([a-z0-9\._-]+)@([a-z0-9\._-]+)\.([a-z]{2,6})$#i";
$adresim="test@gmail.com";

echo "<pre>";

if(preg_match($formatim,$adresim,)):
    echo "Girilen mail formatı doğrudur";
else:
    echo "Girilen mail formatı yanlıştır";
endif;
?>
</body>
</html>