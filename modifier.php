<?php 
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM etudiants WHERE id = :id"; 
$stmt = $pdo->prepare($sql); 
$stmt->execute([':id' => $id]);
$etudiant = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Modifier un étudiant</title> 
</head>
<body>
    <h2>Modifier un étudiant</h2>
    <form action="miseajour.php" method="post"> 
        <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
        <label>Nom :</label>
        <input type="text" name="nom" value="<?= $etudiant['nom'] ?>" required><br>

        <label>Email :</label>
        <input type="email" name="email" value="<?= $etudiant['email'] ?>" required><br>

        <label>Âge :</label>
        <input type="number" name="age" value="<?= $etudiant['age'] ?>" required><br>

        <button type="submit" name="modifier">Modifier</button>

    </form> 
</body>
</html>