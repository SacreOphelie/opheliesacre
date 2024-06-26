<?php
     session_start();
     if(!isset($_SESSION['login']))
     {
         header("LOCATION:../403.php");
     }
 
    //  require "../connexion.php";

    // test si le formulaire a été envoyé
    if(isset($_FILES['svg']))
    {
        $error = 0;
        
        if($error==0)
        {
              // ok - traitement du ou des fichier(s)
            $dossier = "../images/"; // ../images/monfichier.jpg
            $fichier = basename($_FILES['svg']['name']);
            $taille_maxi = 2000000;
            $taille = filesize($_FILES['svg']['tmp_name']);
            $extensions = ['.png','.jpg','.jpeg', '.gif'];
            $extension = strrchr($_FILES['svg']['name'],'.');

            if(!in_array($extension, $extensions))
            {
                $error = 2;
            }
            
            if($taille>$taille_maxi){
                $error = 3;
            }

            // test si le fichier correspond à nos attentes
            if($error == 0)
            {
                $fichier = strtr($fichier, 
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $fichier = preg_replace('/([^.a-z0-9]+)/i','-',$fichier); 
                $fichiercptl = rand().$fichier; 

                if(move_uploaded_file($_FILES['svg']['tmp_name'], $dossier.$fichiercptl))
                {
                    // insertion dans la bdd
                    require "../connexion.php";
                    $insert = $bdd->prepare("INSERT INTO skills(svg) VALUES(?)");
                    $insert->execute([$fichiercptl]);
                    $insert->closeCursor();
                    header("LOCATION:skills.php?add=success");
                }else{
                    header("LOCATION:addSkills.php?errorimg=4");
                }

            }else{
                header("LOCATION:addSkills.php?errorimg=".$error);
            }


            
        }else{
            // redirection vers le formulaire en indiquant l'erreur
            header("LOCATION:addSkills.php?error=".$error);
        }


    }else{
        // redirection vers products.php car il n'y a pas de formulaire envoyé
        header("LOCATION:skills.php");
    }



?>