<?php 
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:../403.php");
    }


    // vérifier ce que je dois modifier 
    if(isset($_GET['id']))
    {
        // protection d'une donnée qui vient de  l'extérieur 
        $id = htmlspecialchars($_GET['id']);
    }else{
        header("LOCATION:animation.php");
    }

    // vérifier et récup les info de ce que je dois modifier
    require "../connexion.php";
    $req = $bdd->prepare("SELECT * FROM animation WHERE id=?");
    $req->execute([$id]);
    $don = $req->fetch();
    if(!$don)
    {
        $req->closeCursor();
        header("LOCATION:animation.php");
    }
    $req->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php
        include("partials/favicon.php");
    ?>
    <title>Document</title>
</head>
<body>
    <?php
        include("partials/header.php");
    ?>
    <div class="container">
        <h2>Modifier: <?= $don['nom'] ?></h2>
        <a href="animation.php" class='btn btn-secondary'>Retour</a>
        <?php
            if(isset($_GET['error']))
            {
                echo "<div class='alert alert-danger my-3'>Une erreur est survenue (code erreur: ".$_GET['error']." )</div>";
            }
        ?>
        <form action="treatmentUpdateAnim.php?id=<?= $don['id'] ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-3">
                        <label for="nom">Nom de l'animation: </label>
                        
                        <input type="text" id="nom" name="nom" value="<?= $don['nom'];?>" class="form-control">
                    </div>
                    <div class="form-group my-3">
                    <div class="col-4">
                        <img src="../images/<?= $don['fichier'] ?>" alt="image de <?= $don['nom'] ?>" class="img-fluid">
                    </div>
                    <label for="fichier">Fichier: </label>
                    <input type="file" name="fichier" id="fichier" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="video">Vidéo: </label>
                        
                        <input type="text" id="video" name="video" value="<?= $don['video'];?>" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="description">Description: </label>
                        <textarea name="description" id="description" class="form-control"><?= $don['description'] ?></textarea>
                    </div> 
                    <div class="form-group my-3">
                        <label for="date">Date: </label>
                        <input type="date" name="date" id="date" class="form-control" value="<?= $don['date'] ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group my-3">
                        <input type="submit" value="Modifier" class="btn btn-warning">
                    </div>
                </div>
              </div>
            </div> 
        </form>
    </div>
    <?php include('partials/footer.php'); ?>
</body>
</html>





