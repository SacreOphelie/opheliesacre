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
    $req = $bdd->prepare("SELECT * FROM web WHERE id=?");
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
    <title>ShowWeb</title>
</head>
<body>
<?php
    include("headfoot/header.php");
?>
    <div class="slide slideshow">
        <div class="contentshow" id="contentweb">
            <div class="contentshow2" id="imgweb">
                <h1><?= $don['nom'] ?></h1>
                <div class="contentshowimg">
                    <img src="images/<?= $don['photo'] ?>" alt="image de <?= $don['nom'] ?>">
                </div>
            </div>
            <div class="contentshow3" id="contentshowweb">
                <div id="contentdateweb">
                    <div class="date">Date : <div><?= $don['date'] ?></div></div>
                    <div class="description">Description : <div><?= nl2br($don['description']) ?></div></div>
                    <div class="url">Site link : <div><a href="<?= nl2br($don['url']) ?>"><?= nl2br($don['url']) ?></a></div></div>
                    <div class="url" id="figma">Figma link : <div><a href="<?= nl2br($don['figma']) ?>"><?= nl2br($don['figma']) ?></a></div></div>
                </div>
                <div class="btnback2">
                    <a href="web.php" class="btnback">Back</a>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>