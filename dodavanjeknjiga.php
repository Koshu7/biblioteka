<?php
require_once "db.php";

if ($query = mysqli_query($conn, "SELECT * FROM autor")){
  
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
  <form action="dodavanjeknjiga_db.php" method="POST">
    <label for="autor">Autor  </label>
    <select name="autor" id="autor">
      <?php 
        $pogled = mysqli_query($conn, "SELECT * FROM autor");
        while($autor = mysqli_fetch_assoc($pogled)){
      ?>
      <option value="<?php echo $autor['id'];?>"><?php echo $autor['ime'].' '.$autor['prezime'];?></option>
    <?php } ?>
    </select>
    <br>
    <?php if(isset($_GET['id'])){
      $id = $_GET['id'];
      $upit = mysqli_query($conn, "SELECT * FROM tabela WHERE id = '$id';");
      $podaci = mysqli_fetch_assoc($upit);
      ?>
      <script type="text/javascript">
        let opcija = document.getElementById('autor');
        opcija.value = <?php echo $podaci['AutorID'];?>
      </script>
      <label for="naslov">Naslov  </label>
      <input type="text" name="naslov" id="naslov" value="<?php echo $podaci['naslov'];?>">
      <br>
      <label for="izdavac">Izdavac  </label>
      <input type="text" name="izdavac" id="izdavac" value="<?php echo $podaci['izdavac'];?>">
      <br>
      <label for="godina">Godina  </label>
      <input type="text" name="godina" id="godina" value="<?php echo $podaci['godina'];?>">
      <hr>
      <input type="hidden" name="knjiga_id" value="<?php echo $podaci['id']; ?>">
      <input type="submit" name="izmjena" value="Izmijeni autora">
    <?php } else{ ?>
      <label for="naslov">Naslov  </label>
      <input type="text" name="naslov" id="naslov">
      <br>
      <label for="izdavac">Izdavac  </label>
      <input type="text" name="izdavac" id="izdavac">
      <br>
      <label for="godina">Godina  </label>
      <input type="text" name="godina" id="godina">
      <hr>
      <input type="submit" name="dodaj" value="Dodaj autora">
    <?php } ?>
  </form>
</body>
</html>