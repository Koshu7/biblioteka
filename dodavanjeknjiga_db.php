<?php

require_once "db.php";

$naslov = mysqli_real_escape_string($conn, $_POST['naslov']);
$izdavac = mysqli_real_escape_string($conn, $_POST['izdavac']);
$godina = mysqli_real_escape_string($conn, $_POST['godina']);
$autor_id = mysqli_real_escape_string($conn, $_POST['autor']);

if(isset($_POST['dodaj'])){
  $query = mysqli_query($conn, "INSERT INTO knjiga (naslov,izdavac,godina,autor_id) VALUES 
    ('$naslov','$izdavac','$godina','$autor_id');");
}
if(isset($_POST['izmjena'])){
  $id = $_POST['knjiga_id'];
  $query = mysqli_query($conn, "UPDATE knjiga SET naslov='$naslov', izdavac='$izdavac',godina='$godina',autor_id='$autor_id' WHERE id='$id';");
}

header('Location: index.php');