<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="fronted.css">
    <title>Ekle</title>
</head>
<header>
    <?php 
    include 'baglanti.php';
    ?>
</header>
<body>
<table id="tablo1">
        <tr>
            <td><a id="change" href="index.html"   >Anasayfa</a></td>
            <td ><a id="change" href="blog.html" >Blog</a></td>
            <td ><a id="change" href="ozgecmis.html"  >Özgeçmiş</a></td>
            <td><a id="change" href="makaleler.html"  >Makaleler</a></td>
            <td><a id="change" href="ekle.php"   >Üyelik sistemi</a></td>
         </tr>
    </table>
    <div id="kayit">Kaydolmak için formu doldurunuz</div>
    
    <form method="POST" action="">
        
    <div id="form1">İsim:<input type ="text" name="isim"><br></div>
       <div id="form2"> Soyisim:<input type="text" name="soyisim"><br></div>
        <br>
        </div>
<div id="buton"><input type="submit" name="submit" value="Ekle"></div>
</form>
<div><a href='listele.php' id="listele">Kayıtları Listele</a></div>
    <?php 
    if(isset($_POST['submit'])){
$isim=$_POST['isim'];
$soyisim=$_POST['soyisim'];
$sql="INSERT INTO bilgiler(ISIM,SOYISIM) VALUES ('$isim','$soyisim')";
if($baglanti->query($sql)==TRUE){
    echo "<div id='ekleme'>KAYIT EKLENDİ</div>";
}else{
    echo $baglanti->error;
}
}
    ?>
    


</body>
</html>