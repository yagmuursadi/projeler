<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Büyük Küçük Harf Ayrımı</title>
</head>
<body>
    <?php
    $kelime='/De/i';
    $icerik= "Düzenli ifadeler (Regular Expression-Regex), birçok programlama
dilinde kullanılabilen sayısal ve dizgisel içeriklerde belirli kurallara
uyan bölümleri bulmak için yazılan ifadelerdir. Düzenli ifadeler genellikle
bir metin içinde arama yapmak veya istenilen metni değiştirmek amacıyla
kullanılır.";
  if(preg_match_all($kelime,$icerik)) {
      echo "İçerik var";
}
  else{
    echo "İçerik yok";
  }
    ?>
</body>
</html>