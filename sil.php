<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fronted.css">
    <title>Document</title>
</head>
<header>
<?php include 'baglanti.php';
?>
</header>
<body>
<table id="tablo1">
        <tr>
            <td><a id="change" href="index.html"   >Anasayfa</a></td>
            <td ><a id="change" href="blog.html" >Blog</a></td>
            <td ><a id="change" href="ozgecmis.html"  >Özgeçmiş</a></td>
            <td><a id="change" href="makaleler.html"  >Makaleler</a></td>
            <td><a id="change" href="anket.html"   >Anket</a></td>
            <td><a id="change" href="ekle.php"   >Üyelik sistemi</a></td>
         </tr>
    </table>
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $silsorgusu="DELETE FROM bilgiler WHERE id='$id'";
        if(mysqli_query($baglanti,$silsorgusu)){
            echo "<div id='silmee'>Kayıt silindi.</div><a href='listele.php' id='silme'><br/>Kayıt listesine dönmek için tıklayınız</a>";
        }
    }
?>
</body>
</html>