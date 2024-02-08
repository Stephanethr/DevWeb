<?php
// Paramètres de connexion à la base de données
include 'connect.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si le champ "username" a été renseigné
    if (!empty($_POST['username'])) {
        // Nettoyer et préparer la valeur du champ "username"
        $username = htmlspecialchars($_POST['username']);
        
        try {
            // Connexion à la base de données
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Requête SQL pour récupérer les informations de l'utilisateur
            $sql = "SELECT * FROM utilisateurs WHERE username = :username";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['username' => $username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Afficher les informations de l'utilisateur
            if ($user) {
                echo "<h3>Informations de l'utilisateur :</h3>";
                echo "<p>Nom d'utilisateur : " . $user['username'] . "</p>";
                echo "<p>Nom : " . $user['nom'] . "</p>";
                echo "<p>Prénom : " . $user['prenom'] . "</p>";
                // Ajouter d'autres champs si nécessaire
            } else {
                echo "Aucun utilisateur trouvé avec ce nom d'utilisateur.";
            }
        } catch(PDOException $e) {
            echo "Erreur de connexion à la base de données : " . $e->getMessage();
        }
    } else {
        echo "Veuillez saisir un nom d'utilisateur.";
    }
}
?>
