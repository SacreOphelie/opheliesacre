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
    $req = $bdd->prepare("SELECT * FROM illustration WHERE id=?");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <?php
        include("headfoot/favicon.php");
    ?>
    <title
    <title>ShowIllu</title>
</head>
<body>
<?php
    include("headfoot/header.php");
?>
    <div class="slide slideshow">
        <div class="contentshow" id="contentshowillu">
            <div class="contentshow2">
                <h1><?= $don['nom'] ?></h1>
                <div class="contentshowimg">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <a href=""></a>

                     
                <?php 
                            $gal = $bdd->prepare("SELECT * FROM images WHERE id_illustration=?");
                            $gal->execute([$id]);
                            // tester si j'ai des images ou non
                            $count = $gal->rowCount();
                            if($count > 0)
                            {
                                while($donGal = $gal->fetch())
                                {
                                   
                                    echo " <div class='swiper-slide'>
                                    <img src='images/".$donGal['fichier']."' alt='image de galerie ".$don['nom']."'>";
                                    echo "</div>";
                                }
                            }else{
                                echo "<p>no associated pictures</p>";
                            }
                            $gal->closeCursor();
                    ?>
                       </div>
                        <div class='swiper-button-next' id='swiper-button'></div>
                        <div class='swiper-button-prev' id='swiper-button'></div>
                    </div>
                </div>
            </div>
            <div class="contentshow3" id="contentillu">
                <div id="contentdate">
                    <div class="date" id="dateillu">Date : <div><?= $don['date'] ?></div></div>
                    <div class="description" id="descriptionillu">Description : <div><?= nl2br($don['description']) ?></div></div>
                </div>

                <div class="btnback2">
                    <a href='illustration.php?categorie=<?= $don['categorie'] ?>' class="btnback">Back</a>
                </div>
            </div>
        </div>
    </div>

<!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
    
</body>
</html>