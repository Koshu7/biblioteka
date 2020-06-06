<?php
require_once "db.php";

if ($query = mysqli_query($conn, "SELECT * FROM autor")){
  echo "success";
} else {
  echo $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodavanje Knjiga</title>
</head>
<body>
  <form action="" method="post">
    <label for="autor">Autor  </label>
    <select name="autor" id="autor">
      <option value="1">Autor1</option>
      <option value="2">Autor2</option>
    </select>
    <br>
    <label for="naslov">Naslov  </label>
    <input type="text" name="naslov" id="naslov">
    <br>
    <label for="izdavac">Izdavac  </label>
    <input type="text" name="izdavac" id="izdavac">
    <br>
    <label for="godina">Godina  </label>
    <input type="text" name="godina" id="godina">
    <hr>
    <input type="submit" value="Dodaj autora">
  </form>
</body>
</html>