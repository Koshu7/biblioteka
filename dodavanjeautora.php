<?php

require_once "db.php";

$ime = mysqli_real_escape_string($conn, $_POST['ime']);  
$prezime = mysqli_real_escape_string($conn, $_POST['prezime']);

if ($query = mysqli_query($conn, "INSERT INTO autor (ime,prezime) VALUES ('$ime','$prezime');")){
  echo "Successfully added row";
} else {
  echo "Error ".mysqli_error($conn);
}

$conn->close();
