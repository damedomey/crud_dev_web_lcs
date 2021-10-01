<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require_once "model/Categorie.php";
  $categorie = new Categorie();
  $categorie->update($_POST['id'], $_POST['libelle']);
  header('location:listeCategorie.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier une categorie</title>
</head>

<body>
  <div>
    <h3>Modifier une categorie</h3>
    <form action="" method="post">
      <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <label for="libelle">Libelle</label>
      <input type="text" name="libelle" value="<?php echo $_GET['libelle'] ?>"><br><br>
      <button type="submit">Modifier</button>
    </form>
  </div>
</body>

</html>