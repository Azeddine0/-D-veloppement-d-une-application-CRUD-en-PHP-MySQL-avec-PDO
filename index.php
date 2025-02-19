<?php
include 'db.php';
$sql = "SELECT * FROM etudiants";
$stml = $pdo->query($sql);
$etudiants = $stml->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Liste des étudiants</title>
</head>
<body>
    <h2>Liste des étudiants</h2> 
    <a href="ajouter.php">Ajouter un étudiant</a>
    <table border="1"> 
        <tr> 
            <th>ID</th>
            <th>Nom</th> 
            <th>Email</th>
            <th>Âge</th>
            <th>Actions</th> 
        </tr>
        <?php foreach ($etudiants as $etudiant): ?> 
            <tr>
                <td><?= $etudiant['id'] ?></td> 
                <td><?= $etudiant['nom'] ?></td> 
                <td><?= $etudiant['email'] ?></td> 
                <td><?= $etudiant['age'] ?></td> 
                <td> 
                    <a href="modifier.php?id=<?= $etudiant['id'] ?>">Modifier</a>
                    <a href="supprimer.php?id=<?= $etudiant['id'] ?>">Supprimer</a>
                </td>
            </tr> 
        <?php endforeach; ?> 
    </table> 
</body>
</html>