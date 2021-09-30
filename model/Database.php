<?php
// Connexion à la base de données

$db = new PDO('mysql:host=localhost;dbname=dbgeschool_lcs', 'root', '');

$request = $db->prepare("SELECT * FROM categorie");
$request->execute();
$content = $request->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($content);
echo '</pre>';
