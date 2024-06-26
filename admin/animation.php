<?php 
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:../403.php");
    }

    require "../connexion.php";

    // si il y a dans l'url delete
    if(isset($_GET['delete']))
    {
        $idProd = htmlspecialchars($_GET['delete']);
        // vérifier si l'id qu'on m'a donné existe vraiment 
        $reqdel = $bdd->prepare("SELECT * FROM animation WHERE id=?");
        $reqdel->execute([$idProd]);
        if(!$dondel = $reqdel->fetch())
        {
            // fermer la requête
            $reqdel->closeCursor();
            // rediriger vers la page product sans delete
            header("LOCATION:products.php");
        }

        // il y a bien une correspondance donc on ferme la requête
        $reqdel->closeCursor();
        
        // supprimer l'image
        unlink("../images/".$dondel['fichier']);


        // supprimer le produit 
        $delete = $bdd->prepare("DELETE FROM animation WHERE id=?");
        $delete->execute([$idProd]);
        $delete->closeCursor();
        header("LOCATION:animation.php?delsuccess=".$idProd);
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
    <title>Admin - Anim</title>
</head>
<body>
    <?php
        include("partials/header.php");
    ?>
    <div class="container-fluid my-5">
     <h2>Gestion des Animations</h2>
     <a href="addAnim.php" class="btn btn-primary my-3">Ajouter une animation</a>
     <?php 
        if(isset($_GET['add']))
        {
            echo "<div class='alert alert-success my-3'>Vous avez bien ajouté un produit à votre base de données</div>";
        }
        if(isset($_GET['delsuccess']))
        {
            echo "<div class='alert alert-danger my-3'>Vous avez bien supprimé le produit n°".$_GET['delsuccess']."</div>";
        }
        if(isset($_GET['update']))
        {
            echo "<div class='alert alert-warning my-3'>Vous avez bien modifié le produit n°".$_GET['update']."</div>";
        }
    ?>
     <table class="table table-striped my-3">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Fichier</th>
                <th>Vidéo</th>
                <th>Description</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $req = $bdd->query("SELECT * FROM animation");
                while($don = $req->fetch())
                {
                    echo "<tr>";
                        echo "<td>".$don['id']."</td>";
                        echo "<td>".$don['nom']."</td>";
                        echo "<td>".$don['fichier']."</td>";
                        echo "<td>".$don['video']."</td>";
                        echo "<td>".$don['description']."</td>";
                        echo "<td>".$don['date']."</td>";
                        echo "<td>";
                            echo "<a href='updateAnim.php?id=".$don['id']."' class='btn btn-warning'>Modifier</a>";
                            echo "<a href='animation.php?delete=".$don['id']."' class='btn btn-danger mx-3'>Supprimer</a>";
                        echo "</td>";
                    echo "</tr>";
                }
                $req->closeCursor();
            ?>
        </tbody>
     </table>
    </div>
    <?php include('partials/footer.php'); ?>
</body>
</html>