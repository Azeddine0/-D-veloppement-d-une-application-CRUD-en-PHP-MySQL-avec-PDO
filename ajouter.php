<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ajouter un étudiant</title> 
</head>
<body>
    <h2>ajouter un etudiant</h2>
    <form action="traitement.php" method="post">
        <label>Nom :</label> 
        <input type="text" name="nom" required><br>

        <label>Email :</label>
        <input type="email" name="email" required><br>

        <label>Âge :</label>
        <input type="number" name="age" required><br>

        <button type="submit" name="ajouter">Ajouter</button>

    </form>
</body>
</html>