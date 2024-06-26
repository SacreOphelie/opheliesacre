<?php
    session_start();
    if(!isset($_SESSION['login']))
    {
        header("LOCATION:../403.php");
    }

      // vérifier à qui je dois ajouter une image
      if(isset($_GET['id']))
      {
          // protection d'une donnée qui vient de  l'extérieur 
          $idIllu = htmlspecialchars($_GET['id']);
      }else{
          header("LOCATION:illustration.php");
      }

      // vérifier et récup les info de ce que je dois afficher
        require "../connexion.php";
        $req = $bdd->prepare("SELECT * FROM illustration WHERE id=?");
        $req->execute([$idIllu]);
        $don = $req->fetch();
        if(!$don)
        {
            $req->closeCursor();
            header("LOCATION:illustration.php");
        }
        $req->closeCursor();

    if(!empty($_FILES['image']['tmp_name']))
    {
         // vérifier le nouveau fichier
        // ok - traitement du ou des fichier(s)
        $dossier = "../images/"; // ../images/monfichier.jpg
        $fichier = basename($_FILES['image']['name']);
        $taille_maxi = 2000000;
        $taille = filesize($_FILES['image']['tmp_name']);
        $extensions = ['.png','.jpg','.jpeg', '.gif'];
        $extension = strrchr($_FILES['image']['name'],'.');
        $err= 0;
        if(!in_array($extension, $extensions))
        {
            $err = 2;
        }
        
        if($taille>$taille_maxi){
            $err = 3;
        }

        if($err == 0)
        {
            $fichier = strtr($fichier, 
            'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
            'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i','-',$fichier); 
            $fichiercptl = rand().$fichier; 

            if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier.$fichiercptl))
            {
                $insert = $bdd->prepare("INSERT INTO images(fichier, id_illustration) VALUES(:img, :prod)");
                $insert->execute([
                    ":img"=> $fichiercptl,
                    ":prod"=> $idIllu
                ]);
                $insert->closeCursor();
                header("LOCATION:updateIllu.php?id=".$idIllu."&add=success");
            }else{
                header("LOCATION:addGalimgIllu.php?id=".$idIllu."&error=4");
            }

           

        }else{
            header("LOCATION:addGalimgIllu.php?id=".$idIllu."&error=".$err);
        }

    }else{
        header("LOCATION:addGalimgIllu.php?id=".$idIllu."&error=1");
    }
?>