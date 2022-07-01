<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ders 2</title>
    <style>
        table{
            font-family: "Cambria Math";
            border-collapse: collapse;
            width: 25%;
        }
        td,th{
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<h1>Ders 2 Sayfasina Hosgeldiniz</h1>

<button onclick="document.location='../index.php'">Ana sayfa</button>
<br>
<hr>
<table border="1">
    <td>
        <th>Degisken Ozellikleri</th>
    </td>
    <tr>
        <th>1</th>
        <th>Degiskenler $ 'dolar' isareti ile tanimlarnir</th>
    </tr>
    <tr>
        <th>2</th>
        <th>Harf veya (_) isareti ile baslarlar</th>
    </tr>
    <tr>
        <th>3</th>
        <th>Turkce karakter kullanilabilir</th>
    </tr>
    <tr>
        <th>4</th>
        <th>Buyuk-Kucuk harfe duyarlidirlar.(case-sensitive)</th>
    </tr>
    <tr>
        <th>5</th>
        <th>Sayi ile baslayamaz</th>
    </tr>
    <tr>
        <th>6</th>
        <th>Tek tirnak ile cift tinak arasindaki fark:Tek tirnagin icine bir degisken yazildigi zaman ekrana degiskenin
        barindirdigi veri degilde degiskenin adi ekrana yazdiriliyor</th>
    </tr>
</table>
<?php
    $isim = 'Bega haciyew';
    echo "<h3>Example:</h3>";
    echo "Cift Tirnak:" , "$isim";
    echo "<h3>Example:</h3>";
    echo "Tek Tirnak:" , '$isim';
?>
</body>
</html>