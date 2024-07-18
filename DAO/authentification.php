<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si les champs de formulaire sont définis
    if (isset($_POST["login"]) && isset($_POST["mot_de_passe"])) {
        // Récupérer les valeurs des champs de formulaire
        $login = $_POST["login"];
        $password = $_POST["mot_de_passe"];

        // Appeler la fonction d'authentification
        $auth_result = authentification($login, $password);

        // Vérifier le résultat de l'authentification
        if ($auth_result == 1) {
            // Authentification réussie, rediriger l'utilisateur vers la page de succès ou effectuer d'autres actions nécessaires
            header("Location: http://localhost/stock/Presentation/dashboard.php");
            exit(); // Arrêter l'exécution du script après la redirection
        } else {
            // Authentification échouée, afficher un message d'erreur ou effectuer d'autres actions nécessaires
            echo "Identifiants incorrects. Veuillez réessayer.";
        }
    }
}

// Fonction d'authentification
function authentification($login, $password){
    // Vous devez implémenter la connexion à votre base de données ici
    // et exécuter la requête SQL pour vérifier les informations d'authentification

    // Exemple de connexion à la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=stock', 'root', '');

    // Préparer la requête SQL
    $stmt = $pdo->prepare("SELECT * FROM administrateurs WHERE login = ? AND password = ?");
    $stmt->execute(array($login, $password));

    // Vérifier si une ligne correspondante est trouvée dans la base de données
    if($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        // Si l'utilisateur est trouvé, vous pouvez stocker ses informations dans la session ou les utiliser comme vous le souhaitez
        session_start();
        $_SESSION['user'] = $row;
        return 1; // Authentification réussie
    } else {
        return 0; // Authentification échouée
    }
}
?>
