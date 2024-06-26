<?php
    header("HTTP/1.0 403 Forbidden");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
        include("headfoot/favicon.php");
    ?>
    <title
    <title>error 403</title>
</head>
<body>
<?php
        include("headfoot/header.php");
?>
    <div class="error slide">
        <h1>Vous n'avez accès à cette partie du site</h1>
        <a href="index.php" class="errorbtn btnpc">Retour</a>
    </div>
<?php
    include("headfoot/footer.php");
?>
</body>
</html>