<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
<?php
include 'baglanti.php';
?>
</header>

<body>
<?php
$sorgu="SELECT * FROM bilgiler";
$sorgusonucu=mysqli_query($baglanti,$sorgu) or trigger_error("hata".mysqli_error($mysqli),E_USER_ERROR);
if($sorgusonucu){
    echo"<table border='1px'>";
    while($kayit=mysqli_fetch_assoc($sorgusonucu)){
        echo "<tr><td>".$kayit['ISIM']."</td><td>".$kayit['SOYISIM']."<td>
        
        <a href='sil.php?id=".$kayit['id']."'>Kaldır</a></td></tr>";
    }
}
echo"</table>";
    ?>
    <br><a href='ekle.php'>Yeni kayıt ekle</a>  
</body>
</html>