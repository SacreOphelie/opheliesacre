<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=sdgy0690_portfolio_ophelie;charset=utf8','sdgy0690_sacreophelie','Epse9C217',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $e)
    {
        die('Erreur: '.$e->getMessage());
    }
?>