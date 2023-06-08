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
    if(isset($_POST['submit'])){
$isim=$_POST['isim'];
$soyisim=$_POST['soyisim'];
$sql="INSERT INTO bilgiler(ISIM,SOYISIM) VALUES ('$isim','$soyisim')";
if($baglanti->query($sql)==TRUE){
    echo "KAYIT EKLENDİ";
}else{
    echo $baglanti->error;
}
}
    ?>
    <form method="POST" action="">
        İsim:<input type ="text" name="isim"><br>
        Soyisim:<input type="text" name="soyisim"><br>
        <br>
<input type="submit" name="submit" value="Ekle">
</form>
<br><a href='listele.php'>Kayıtları Listele</a>
</body>
</html>