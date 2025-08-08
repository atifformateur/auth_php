<?php 
session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['loggin'] !== true ) {

    header('location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'] ?? 'inconnu';
$username = $_SESSION['username'] ?? 'non renseigné';
$email = $_SESSION['email'] ?? "pas d'email";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <header>
        <h1>mon site d'auth en php</h1>
        <span><?= "welcom $username sur mon site. Vous êtes co avec l'adresse mail $email"; ?></span>
        <nav>
            <ul>
                <li>
                    <a href="">lien vers une page</a>
                </li>
                <li>
                    <a href="">lien vers une page</a>
                </li>
                <li>
                    <a href="">lien vers une page</a>
                </li>
                <li>
                    <a href="">deco</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>

    </main>
</body>
</html>


