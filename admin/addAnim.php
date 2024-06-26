<?php 
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:../403.php");
    }
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
    <title>addAnim</title>
</head>
<body>
    <?php
        include("partials/header.php");
    ?>
    <div class="container">
        <h2>Ajouter une animation</h2>
        <a href="animation.php" class='btn btn-secondary'>Retour</a>
        <?php
            if(isset($_GET['error']))
            {
                echo "<div class='alert alert-danger my-3'>Une erreur est survenue (code erreur: ".$_GET['error']." )</div>";
            }
        ?>
        <form action="treatmentAddAnim.php" method="POST" enctype="multipart/form-data">
            <div class="form-group my-3">
                <label for="nom">Nom de l'animation: </label>
                <input type="text" id="nom" name="nom" value="" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="fichier">Fichier: </label>
                <input type="file" name="fichier" id="fichier" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="nom">Video: </label>
                <input type="text" id="video" name="video" value="" class="form-control">
            </div>
            <div class="form-group my-3">
                <label for="description">Description: </label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <div class="form-group my-3">
                <label for="date">Date: </label>
                <input type="date" name="date" id="date" class="form-control">
            </div>
            <div class="form-group my-3">
                <input type="submit" value="Ajouter" class="btn btn-success">
            </div>
        </form>
    </div>
    <?php include('partials/footer.php'); ?>
</body>
</html>