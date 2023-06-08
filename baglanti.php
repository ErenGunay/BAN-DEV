<?php
$baglanti= mysqli_connect('localhost','root','','kisiler');
$baglanti->set_charset("utf8");
if(!$baglanti){
    die('hata:'.mysqli_connect_error());
    }
    
    ?>