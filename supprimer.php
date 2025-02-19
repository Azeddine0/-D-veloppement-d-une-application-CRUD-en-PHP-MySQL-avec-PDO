<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM etudiants WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute([':id' => $id]);

echo "Etudiant supprime avec succes ! <a href='index.php'>Retour</a>";
?>