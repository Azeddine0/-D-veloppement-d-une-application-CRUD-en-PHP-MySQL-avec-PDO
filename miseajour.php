<?php
include 'db.php';

if (isset($_POST['modifier'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "UPDATE etudiants SET nom = :nom, email = :email, age = :age WHERE id = :id";
    $stmt = $pdo->prepare($sql); 
    $stmt->execute([ 
        ':id' => $id,
        ':nom' => $nom,
        ':email' => $email,
        ':age' => $age
    ]);
    echo "Etudiant modifie evec succes! <a href='index.php'>Retour</a>";
}
?>