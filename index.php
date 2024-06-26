<?php 
    require "connexion.php";
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
    <title>Portfolio_OphélieSacré</title>
</head>
<body>
    <?php
        include("headfoot/header.php");
    ?>
    <div class="slide" id="home">
        <div class="arrow">
            <div class="arrowl" id="arrow1"></div>
            <div class="arrowl" id="arrow2"></div>
        </div>
    </div>
    <div class="slide" id="aboutme">
        <h1>About Me</h1>
        <hr>
        <div class="contentabout">
            <div id="portrait"><img src="home/portrait.png" alt=""></div>
            <div id="texte">
                <h2>
                    Ophélie Sacré • Graphic Designer 
                </h2>
                <p> I'm studying graphic design. I have a passion for design and coding and I'm always looking for new ways to combine these two fields. My aim is to become a polyvalent graphic designer, capable of creating innovative designs and developing effective web solutions. I'm always open to new opportunities and collaborations.</p>
                <p>I like to play video games, watch films/serials, and above all create new things.</p>
                <p>I'm motivated, organised, creative and adaptable.</p>
                <div class="cvcontact">
                    <div id="cont2">
                        <a href="#contact" id="contactme">Contact Me</a>
                    </div> 
                    <div id="cv2">
                        <a href="home/cv-sacreophelie.pdf" id="cv">CV</a>
                    </div>
                </div>
                                
            </div>
            <div id="chat"></div>
        </div>
        
    </div>
    <div class="slide" id="skills">
        <h1>Skills</h1>
        <hr>
        <div class="contentskills">
            <?php
                $req = $bdd->query("SELECT * FROM skills ORDER BY id ASC");
                while($don = $req->fetch())
                {
                    echo "<div>";
                        echo "<img src='images/".$don['svg']."' class='img-fluid' />";
                       
                    echo "</div>";
                }
                $req->closeCursor();
            ?>
            
        </div>
    </div>
    <div class="slide" id="works">
        <h1>Works</h1>
        <hr>
        <div class="contentworks">
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg1"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="illustration.php?categorie=Photoshop" class="btnpc">Photoshop</a>
                </div>
            </div>         
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg2"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="illustration.php?categorie=Illustrator" class="btnpc">Illustrator</a>
                </div>
            </div>         
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg3"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="illustration.php?categorie=Indesign" class="btnpc">InDesign</a>
                    
                </div>
            </div>         
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg4"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="animation.php" class="btnpc">Animation</a>
                </div>
            </div>         
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg5"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="web.php" class="btnpc">WebSite</a>
                </div>
            </div>         
            <div class="pc">
                <div class="ecran">
                    <div class="pcimg" id="pcimg6"></div>
                </div>
                <div class="support"></div>
                <div class="pied"></div>
                <div class="btnpc2">
                    <a href="pictures.php" class="btnpc">Pictures</a>
                </div>
            </div>         
        </div>
    </div>
    <div class="slide" id="contact">
        <h1>Contact</h1>
        <img src="home/livres.png" alt="livres" id="livres">
        <div class="contentcontact">
            <form action="traitement.php" method="POST">
                <?php
                    if(isset($_GET['error']))
                    {
                        echo "<div class='alert'>An error has occurred (error code: ".$_GET['error'].")</div>";
                    }

                    if(isset($_GET['message']))
                    {
                        if($_GET['message']=="success")
                        {
                            echo "<div class='success'>Your message has been sent</div>";
                        }
                    }
                ?>
                <div class="nom">
                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Name">
                    <input type="text" id="prenom" name="prenom" class="form-control" placeholder="First Name">
                </div>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail">
                <textarea name="message" id="message" class="form-control" placeholder="Message"></textarea>
                <div class="btn-send">
                    <input type="submit" value="Send" id="btn-success">
                </div>
            </form>
        </div>

    </div>
    <?php include('headfoot/footer.php'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/TextPlugin.min.js"></script>

    <script>
        gsap.to(".arrow", { y:50,duration: 1,repeat: -1, yoyo:true});
        gsap.to(".success", {duration: 1,repeat: -1, yoyo:true, border: 'solid 1px rgb(64, 0, 255)' });
        gsap.to(".alert", {duration: 1,repeat: -1, yoyo:true, border: 'solid 1px  rgb(255, 0, 0)' });
    </script>

    
</body>
</html>