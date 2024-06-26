<?php 
    require "connexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php
        include("headfoot/favicon.php");
    ?>
    <title
    <title>Web Site</title>
</head>
<body>
<?php
    include("headfoot/header.php");
?>
    <div class="slide slideworks">
        <div class="contenttitre">
            <div class="btnback2">
                <a class="btnback" href="index.php#works">Back</a>
            </div>
            <div class="titre">
                <h1>Web</h1>
                <hr>
            </div>
        </div>
        <div class="contentworks2">
            <div class="contentworks">
            <?php
                $req = $bdd->query("SELECT * FROM web ORDER BY date DESC");
                while($don = $req->fetch())
                {
                    echo "<div class='pc'>";
                        echo "<div class='ecran'>";
                            echo "<div class='pcimg'>";
                                echo "<img src='images/".$don['photo']."' class='img' />";
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='support'>";
                        echo "</div>";
                        echo "<div class='pied'>";
                        echo "</div>";
                        echo "<div class='btnpc2'>";
                        echo "<a href='showweb.php?id=".$don['id']."' class='btnpc'>".$don['nom']."</a>";
                        echo "</div>";    
                    echo "</div>";
                }
                $req->closeCursor();
            ?>
            </div>
        </div>
    </div>
        <?php
        include("headfoot/footer2.php");
        ?>
    
</body>
</html>