<?php

mb_internal_encoding("utf-8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
$pdo->exec("insert into 4each_keijiban(handlname,title,comments)values('".$_POST['handlname']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");
?>