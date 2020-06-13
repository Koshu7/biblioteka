<!DOCTYPE html>
<?php include_once 'pregled.php' ?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Autori i Knjige</title>
</head>
<body>
  <h1>Autori i Knjige</h1>
  
  <a href="brisanje.php">Brisanje</a>

  <br><br>
  <hr>
  <table>
    <tr>
      <th>ID</th>
      <th>Autor</th>
      <th>Naslov</th>
      <th>Izdavac</th>
      <th>Godina</th>
      <th></th>
      <th></th>
    </tr>
    <?php if (mysqli_num_rows($query)){
            while ($pogled = mysqli_fetch_assoc($query)){
              ?>

              <tr>
                <td><?php echo $pogled['id']; ?></td>
                <td><?php echo $pogled['ime'].' '.$pogled['prezime']; ?></td>
                <td><?php echo $pogled['naslov']; ?></td>
                <td><?php echo $pogled['izdavac']; ?></td>
                <td><?php echo $pogled['godina']; ?></td>
                <td><a href="<?php echo 'dodavanjeknjiga.php?id='.$pogled['id']; ?>">Izmjena</a></td>
                <td><a href="<?php echo 'brisanje.php?id='.$pogled['id'];?>" id="ukloni">Ukloni</a></td>
              </tr>
              <?php
            }
          }
          ?>
  </table>
  
  <h3><a href="dodavanje.html">Dodavanje autora</a></h3>
  <h3><a href="dodavanjeknjiga.php">Dodavanje knjiga</a></h3>

  <script type="text/javascript">
    let potvrda = document.querySelectorAll('#ukloni');
    for (let i=0; i < potvrda.length;i++){
      potvrda[i].addEventListener('click',(e) => {
        if (!confirm("Da li ste sigurni da zelite da obrisete stavku?")) e.preventDefault();
      });
    }
  </script>
</body>
</html>