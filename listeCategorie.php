<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajouter une categorie</title>
</head>

<body>
  <div>
    <a href="addCategorie.php">Ajouter</a><br><br>
    <table border style="border-collapse: collapse;">
      <thead>
        <th>Id</th>
        <th>Libelle</th>
        <th></th>
      </thead>
      <tbody>
        <?php
        require_once("model/Categorie.php");
        $categorie = new Categorie();
        $listeCategorie = $categorie->findAll();
        // echo '<pre>';
        // print_r($listeCategorie[0]);
        // echo '</pre>';
        foreach ($listeCategorie as $tuple) {
          echo "<tr>";
          echo "<td>" . $tuple['id'] . "</td>";
          echo "<td>" . $tuple['libelle'] . "</td>";
          echo "<td><button>Editer</button><button>Supprimer</button></td>";
          echo "</tr>";
        }
        ?>
        <!--<tr>
          <td>1</td>
          <td>Fruit</td>
          <td><button>Editer</button><button>Supprimer</button></td>
        </tr>-->
      </tbody>
    </table>
  </div>
</body>

</html>