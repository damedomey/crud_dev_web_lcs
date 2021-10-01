<?php
class Categorie
{
  private $_db;
  /**
   * Constructeur de la classe Categorie
   */
  public function __construct()
  {
    // Création de la connexion à la base de données
    $this->_db = new PDO('mysql:host=localhost;dbname=dbgeschool_lcs', 'root', '');
  }

  /**
   * Cette methode renvoit toutes les tuples de la table categorie
   */
  public function findAll()
  {
    $request = $this->_db->prepare("SELECT * FROM categorie");
    $request->execute();
    $content = $request->fetchAll(PDO::FETCH_ASSOC);
    return $content;
  }

  /**
   * Cette methode renvoit le tuple de la table categorie pour lequel l'attribut $key(un attribut de la table) à la valeur $value
   * Exemple de la requête appliquée: 
   *  SELECT * FROM categorie WHERE libelle = 'Fruit'; 
   *  Dans le cas ci-dessus, $key = 'libelle' et $value = 'Fruit'
   */
  public function findBy(string $key, string $value)
  {
    $sql = "SELECT * FROM categorie WHERE " . $key . "='" . $value . "' ";
    $request = $this->_db->prepare($sql);
    $request->execute();
    return $request->fetchAll(PDO::FETCH_ASSOC);
  }

  /**
   * Permet d'insérer un libellé dans la table catégorie
   */
  public function insert(string $libelle)
  {
    $sql = "INSERT INTO categorie(libelle) VALUE ('" . $libelle . "')";
    $request = $this->_db->prepare($sql);
    return $request->execute();
  }

  /**
   * Permet de mettre à jour un libellé dans la table catégorie en fonction de l'id
   */
  public function update(int $id, string $libelle)
  {
    $sql = "UPDATE categorie SET libelle = '" . $libelle . "' WHERE id = " . $id;
    $request = $this->_db->prepare($sql);
    return $request->execute();
  }

  /**
   * Permet de supprimer un tupple dans la table catégorie en fonction de l'id
   */
  public function delete(int $id)
  {
    $sql = "DELETE FROM categorie WHERE id = " . $id;
    $request = $this->_db->prepare($sql);
    return $request->execute();
  }
}
