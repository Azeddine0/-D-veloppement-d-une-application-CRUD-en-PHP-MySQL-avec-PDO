<?php 
include 'db.php';

if (isset($_POST['ajouter'])) { 
    $nom = $_POST['nom']; 
    $email = $_POST['email'];
    $age = $_POST['age']; 
    $sql = "INSERT INTO etudiants (nom, email, age) VALUES (:nom, :email, :age)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nom' => $nom,
        ':email' => $email,
        ':age' => $age
    ]);

    echo "Étudiant ajouté avec succès ! <a href='index.php'>Voir la liste</a>"; 
}
?>