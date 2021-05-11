<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simply Home, constructeur de vie </title>
    <!-- Liens-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet " href="css/simply.css ">
</head>

<body>
<?php include('header.php'); ?>
    <form action="script.php" method="post">
        <div class="formulaire">
        <div class="mail">
            <label for="email">Adresse Email
                <input type="text" name="pass"> <br>
            </label>
        </div>

        <div class="mdp">
            <label for="password">Mot de passe
                <input type="password" name="pass">
            </label>
        </div>

        <div class="connexion">
            <input type="submit" name="validation" value="Se connecter" /><br>
        </div>
        </div>

    </form>
    <?php include('footer.php'); ?>
</body>