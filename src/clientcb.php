<?php
$bdd = new PDO('mysql:host=localhost;dbname=djibson;charset=utf8', 'root', '');

$cryptogramme = password_hash('mister95@' , PASSWORD_DEFAULT);
$bdd->query("INSERT INTO `membre` (`id` ,`login`,`mot_passes`) VALUES (NULL,'shahoul95@gmail.com','$cryptogramme')");




?>