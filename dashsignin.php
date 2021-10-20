<?php
session_start();
// On vérifie si $_POST n'est pas vide
if (!empty($_POST)) {
    // On vérifie que tous les champs obligatoires sont remplis
    if (
        isset($_POST['email'], $_POST['pass'])
        && !empty($_POST['email'])
        && !empty($_POST['pass'])
        ) {
            // On vérifie que l'email a une forme valide
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $_SESSION['message'][] = '<p>Email invalide</p>';
            }
            
            // On se connecte à la base
            require_once 'includes/connexionbase.php';
            
            // On écrit la requête SQL
            $sql = 'SELECT * FROM `users` WHERE `email` = :email;';
            
            // On prépare la requête
            $requete = $db->prepare($sql);
            
            // On injecte les valeurs
            $requete->bindValue(':email', $_POST['email']);
            
            // On exécute la requête
            $requete->execute();
            
            // On récupère les données
            $user = $requete->fetch();
            
            // On vérifie si l'utilisateur est inconnu
            if (!$user) {
                $_SESSION['message'][] = '<p>L\'identifiant ou le mot de passe est incorrect</p>';
            }
            
            // Ici, $user contient les informations d'un utilisateur existant
            // On vérifie le mot de passe
            if (!password_verify($_POST['pass'], $user['password'])) {
                $_SESSION['message'][] = '<p>L\'identifiant ou le mot de passe est incorrect</p>';
            }
            
            // On vérifie si on a des erreurs
            if(isset($_SESSION['message'])){
                header('Location: dashsignin.php');
                exit;
            }
            // die("ghnlkjp");

        // Le mot de passe est bon
        // On démarre la session

           // On inscrit l'utilisateur dans $_SESSION
           $_SESSION['users'] = [
            'id' => $user['id'],
            'email' => $user['email']
        ];
        // On redirige vers la page de notre choix
        header('Location:dashboard.php');

        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <script src="js/burger.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/connexion.css">
    <title>CONNEXION</title>
</head>

<body>
    <?php
    require_once 'includes/corpssignin.php';
    var_dump($_SESSION);
    ?>
        <?php
        if(isset($_SESSION['message'])){
            foreach($_SESSION['message'] as $message){
                echo "<p>$message</p>";
            }
            unset($_SESSION['message']);
        }
    ?>
</body>

</html>