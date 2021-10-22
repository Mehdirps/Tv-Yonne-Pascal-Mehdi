<?php
session_start();
if (!empty($_POST)) {
    if (
        isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']) &&
        !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['role'])
    ){
        if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            $_SESSION['message'][] = "L\'email n\'est pas valide";
            header('Location:add_users.php');
            exit;
        }
    }
}
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);
$role = $_POST['role'];

require_once "../includes/bdd_connect.php";

$sql = "INSERT INTO `users`(`name`, `email`, `password`,`role`) VALUES (:name, :email, $pass, $role)";

$query = $pdo->prepare($sql);
$query->bindValue(':name', $name);
$query->bindValue(':email', $email);

$query->execute();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une emission</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>

<body>
    <?php
    include "../dashboard_includes/dashboard_nav.php";
    ?>
    <main class="add">
        <h1>Ajouter une emission</h1>
        <form method="post">
            <div>
                <label for="name">Nom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="role">Role</label>
                <input type="text" name="role" id="role">
            </div>
            <div>
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </main>
</body>

</html>