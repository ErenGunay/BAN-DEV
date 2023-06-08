<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
<?php include 'baglanti.php';
?>
</header>
<body>
    <?php
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $silsorgusu="DELETE FROM bilgiler WHERE id='$id'";
        if(mysqli_query($baglanti,$silsorgusu)){
            echo "Kayıt silindi.<a href='listele.php'>Geri dön</a>";
        }
    }
?>
</body>
</html>