<?php
    // démarrer le système de session pour la sécurité
    session_start();

    // tester si je suis déjà connecter
    if(isset($_SESSION['login']))
    {
        header("LOPCATION:dashboard.php");
    }

    // tester si le formulaire est envoyé
    if(isset($_POST['login']))
    {
        // si le formulaire est bien envoyé
        // traiter les informations
        if(empty($_POST['login']) OR empty($_POST['password']))
        {
            // $error n'existe que dans le cas où login ou pas est vide
            $error = "Veuillez remplir correctement le formulaire";
        }else{
            // je vais regarder dans la base de données si j'ai des informations sur le login donné
            require "../connexion.php";
            $login = htmlspecialchars($_POST['login']);
            $password = $_POST['password'];

            // req à la bdd vérifier la présence du login
            $req = $bdd->prepare("SELECT * FROM admin WHERE login=?");
            $req -> execute([$login]);
            $don = $req->fetch();
            $req->closeCursor();
            if(!$don)
            {
                // dans le cas où le login n'existe pas dans la bdd
                $error="Votre login ou votre mot de passe est incorrect";
            }else{
                // le login existe
                // vérifier le mot de passe 
                if(password_verify($password,$don['password']))
                {
                    // mot de passe correct -> connexion
                    $_SESSION['login'] = $don['login'];
                    header("LOCATION:dashboard.php");
                }else{
                    // mot de passe incorrect -> error
                    $error="Votre login ou votre mot de passe est incorrect";
                }                
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <?php
        include("partials/favicon.php");
    ?>
    <title>Portfolio</title>
</head>
<body>
    <div class="admin slide">
        <div class="containadmin">
            <div class="connexion">
                <h1>Administration</h1>
                <h2>Connexion</h2>
                <form action="index.php" method="POST">
                <?php
                    if(isset($error))
                    {
                        echo "<div class='alert alert-danger'id='alertadmin'>".$error."</div>";
                    }
                ?>
                <div class="login">
                    <label for="Login">Login</label>
                    <input type="text" name="login" id="login" class="form-control">
                </div>
                <div class="mdp">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="btnadmin">
                    <input type="submit" value="Connexion">
                </div>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>