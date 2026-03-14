<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $uzuncumle="PHP; sunucu üzerinde çalışan, açık kaynak, ücretsiz, web uygulamaları geliştirmek
     için kullanılan betik programlama dilidir. 1995’te Rasmus Lerdorf tarafından geliştirilen 
     PHP ilk olarak Personel Home Page (Kişisel Anasayfa) olarak adlandırılmaktayken günümüzde PHP
     Hypertext Preprocessor (PHP Üstün Yazı Ön işlemcisi) olarak adlandırılmaktadır.";
    $aranan="/\w/";

    preg_match_all($aranan,$uzuncumle,$bulunan);
    echo "<pre>";
    print_r($bulunan);
    echo "</pre>"



    ?>
    
</body>
</html>