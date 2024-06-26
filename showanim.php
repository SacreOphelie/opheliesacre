<?php
    // vérifier si j'ai un id ou non
    if(isset($_GET['id']))
    {
        // protection
        $id = htmlspecialchars($_GET['id']);
    }else{
        header("LOCATION:404.php");
    }

    // vérifier que l'id existe bien dans ma bdd 
    require "connexion.php";
    $req = $bdd->prepare("SELECT * FROM animation WHERE id=?");
    $req->execute([$id]);
    $don = $req->fetch();
    $req->closeCursor();
    if(!$don)
    {
        header("LOCATION:404.php");
    }
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
        include("headfoot/favicon.php");
    ?>
    <title
    <title>Document</title>
</head>
<body>
<?php
    include("headfoot/header.php");
?>
    <div class="slide slideshow">
        <div class="contentshow">
            <div class="contentshow2">
                <h1><?= $don['nom'] ?></h1>
                <div class="contentshowimg">
                    <img src="images/<?= $don['fichier'] ?>" alt="image de <?= $don['nom'] ?>">
                </div>
            </div>
            <div class="contentshow3">
                <div class="date">Date : <div><?= $don['date'] ?></div></div>
                <div class="description">Description : <div><?= nl2br($don['description']) ?></div></div>
                <div class="video">Vidéo :<iframe width="1280" height="580" src="<?= $don['video'] ?>" title="<?= $don['nom'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen id="video"></iframe> </div>
                <div class="btnback2">
                    <a href="animation.php" class="btnback">Back</a>
                </div>
            </div>
            

        </div>
    </div>

    
</body>
</html>