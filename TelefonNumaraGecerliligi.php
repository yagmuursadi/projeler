<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<title>Telefon Kontrol</title>
</head>
<body>

<form method="post">
    Telefon Numaranızı Girin:<br><br>
    <input type="text" name="telefon" placeholder="05xx xxx xx xx">
    <input type="submit" value="Kontrol Et">
</form>

<br>

<?php

if(isset($_POST["telefon"])){

    $formatim="#^(05|5)([0-9]{2})\s?([0-9]{3})\s?([0-9]{2})\s?([0-9]{2})$#";
    $numara=$_POST["telefon"];

    if(preg_match($formatim,$numara))
    {
        echo "Telefon numarası geçerli.";
    } 
    else 
    {
        echo "Girilen telefon numarası hatalı! Lütfen 05xx xxx xx xx formatında giriniz.";
    }

}

?>

</body>
</html>