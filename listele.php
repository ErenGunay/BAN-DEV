<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listele</title>
    <link rel="stylesheet" type="text/css" href="fronted.css">
</head>
<header>
<?php
include 'baglanti.php';
?>
</header>

<body>
<table id="tablo1">
        <tr>
            <td><a id="change" href="index.html" >Anasayfa</a></td>
            <td ><a id="change" href="blog.html">Blog</a></td>
            <td ><a id="change" href="ozgecmis.html">Özgeçmiş</a></td>
            <td><a id="change" href="makaleler.html">Makaleler</a></td>
            <td><a id="change" href="ekle.php">Üyelik sistemi</a></td>
         </tr>
    </table>
    
<?php
$sorgu="SELECT * FROM bilgiler";
$sorgusonucu=mysqli_query($baglanti,$sorgu) or trigger_error("hata".mysqli_error($mysqli),E_USER_ERROR);
if($sorgusonucu){
    echo"<div id='tablo2'><table border='1px'>";
    while($kayit=mysqli_fetch_assoc($sorgusonucu)){
        echo "<div id='yazi'><tr><td>".$kayit['ISIM']."</td><td>".$kayit['SOYISIM']."<td>
        
        <a href='sil.php?id=".$kayit['id']."'>Kaldır</a></td></tr></div>";
    }
}
echo"</table></div>";
    ?>
    <br><a href='ekle.php' id="eklemee">Yeni kayıt ekle</a>  
</body>
</html>