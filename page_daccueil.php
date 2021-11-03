<?php session_start();?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <link rel="icon" href="images/icone.ico" />
    <title>L'Art Scène - Accueil</title>
    <meta charset="utf-8">
    <link href="style_accueil.css" rel="stylesheet" type="text/css" />

</head>



<body>

    <header>
        <div id="header">
            <h1>
                <div id="titre_page">&ensp;</div>
            </h1>
            <div id="barre">
                <ul id="menu">
                    <a href="page_daccueil.php" target="_self">
                        <img id="logo" src="images/logo_border.png" alt="Logo L'Art Scène" style="max-width: 250px;">
                    </a>
                    <li style="padding-left: 50px;"><a href="boutique.php" target="_self">Boutique</a></li>
                    <li><a href="evenements.php" target="_self">Évènements</a></li>
                    <li><a href="instrument_a_disposition.html" target="_self">Instruments à disposition</a></li>
                    <li><a href="playlist.html" target="_self">Playlist</a></li>
                    <li><a href="passation.html" target="_self">Passation</a></li>
                </ul>
            </div>
            <span id="copyright">&#169; L'art Scène 2021</span>
        </div>
    </header>



    <i class="ligne_haut"></i>
    <?php

    // if (isset($_SESSION['pseudo'])){
        ?>

        <p> Bienvenue sur votre profil <?=$_SESSION['pseudo']?></p>

        <div id="deconnexion">
            <ul>
                <li>
                    <a href="page_daccueil.php" target="_blank">
                    <img src="images/connexion.png" alt="Deconnexion" style="max-width: 20px;">
                    Deconnexion
                    </a>
                </li>
            </ul>
        </div>

        <?php
        //si bouton deconnexion appuyé
    //     if(isset($_POST['logout'])){
    //         //nettoie la session
    //         session_unset();
    //         session_destroy();
    //     }
    // }
    // else{  ?>

        <div id="connexion">
            <ul>
                <li>
                    <a id="btnPopupConnexion" target="_blank" onclick="document.getElementById('overlay').style.display='block';">
                    <img src="images/connexion.png" alt="Connexion" style="max-width: 20px;">
                    Connexion
                    </a>
                </li>

                <a></a>
                <li>
                    <a href="inscription.php" target="_blank">
                    <img src="images/inscription.png" alt="Inscription" style="max-width: 20px;">
                        Inscription
                    </a>
                </li>
                <a></a>
            </ul>
        </div>

    <?php
    //}
    ?>



    <div id="ecart">&ensp;</div>


    <div class="flip-card" style="position: absolute; left: 100px; top: 210px;">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/karaoke.jpg" alt="Karaoké" style="max-width: 300px;">
            </div>
            <div class="flip-card-back">
                <div class="separation_texte">
                    <p>Ces derniers temps notre évènement karaoké est particulièrement apprécié par les étudiants.</p>
                    <p>Nous rappelons qu'il est ouvert à tous les étudiants, adérants ou non.</p>
                    <p>Pour plus d'information veuillez consulter la page évènement du karaoké.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flip-card" style="position: absolute; right: 100px; top: 360px;">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/fete.jpg" alt="Fête" style="max-width: 300px;">
            </div>
            <div class="flip-card-back">
                <div class="separation_texte">
                    <p>Venez nombreux aux concerts ouverts à tous.</p>
                    <p>Vous pouvez également vous produir sur scène avec nous!</p>
                    <p>Profitez et passez un bon moment entre amis!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flip-card" style="position: absolute; left: 100px; top: 550px;">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/instruments.jpg" alt="Instruments" style="max-width: 300px;">
            </div>
            <div class="flip-card-back">
                <div class="separation_texte">
                    <p>Vous pouvez venir nous emprunter nos instruments.</p>
                    <p>Pour plus d'information veuillez consulter la page "Intruments à disposition" afin de voir quels
                        instruments sont disponibles et de les réserver.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flip-card" style="position: absolute; right: 100px; top: 700px;">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="images/playlist.jpg" alt="Playlist" style="max-width: 300px;">
            </div>
            <div class="flip-card-back">
                <div class="separation_texte">
                    <p>Nous avons de nombreuses playlist pour toutes les situations.</p>
                    <p>Que ce soit le soir, pour travailler, pour se motiver, pour danser et bien plus encore.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="centre">
        <div id="description">
            <h2>L'Art Scène, c'est quoi ?</h2>
            <p>Contrairement à ce que son nom indique, nous ne nous amusons pas à mettre des micros à côtés des
                enceintes. Du moins, pas volontairement. Nous sommes un association de musique qui regroupe à peu près
                tous les domaines, du piano à la batterie en passant par les basses, la voix et le violon. Notre but ?
                Faire de la musique ensemble !</p>
            <h2>Comment nous trouver ?</h2>
            <p>Notre local se situe en CY111, si vous souhaitez plus d’informations, n’hésitez pas à passer nous voir !
            </p>
            <h2>Pourquoi nous rejoindre ?</h2>
            <p>L’Art scène, au delà des concerts (qui pour l’instant sont fortement compromis) c’est aussi trouver le
                temps de se détendre en écoutant les gens faire de l’impro ou même y participer, des soirées karaokés et
                des nocturnes. Nous proposons également des cours d’initiation d’instruments alors, si vous êtes
                expérimentés ou voulez débuter, n’hésitez pas à nous faire signe !</p>
            <p style="padding: 0px 25px;">Musicalement vôtre,</p>
            <p style="padding: 0px 25px;">L’Art Scène</p>
        </div>
    </div>

            <div id="overlay" class="overlay">
                <div id="popup" class="popup">
                    <div id="btnClose" class="btnClose">&times;</div>
                    <div ip="popup-header" class="popup-header"> 
                        <h3>Veuillez vous identifier</h3>
                    </div>

                <div class="popup-corps" id="popup-corps">


                    <form method="POST">
                        <label for="pseudo">Nom d'utilisateur : </label><br>
                        <input type="text" name="lpseudo" placeholder="Nom d'utilisateur" required><br><br>
                        <label for="mdp">Mot de passe :</label><br>
                        <input type="text" name="lmdp" placeholder="Mot de passe" required><br><br>
                        <button type="submit" value="Valider" name="formlogin" id="formlogin"> Connexion </button><br><br>
                    </form>

                    <?php 
                        include 'includes/database.php';
                        global $db;
    
                        include 'includes/login.php'; 
                    ?>


                </div>
                </div>
            </div>

    <footer>
        <h3 style="margin-left: 40px;">Nous contacter</h3>
        <ul>
            <a href="https://www.facebook.com/LArt-Sc%C3%A8ne-518793575185721/">
                <img src="images/facebook_logo.png" alt="Contact Facebook" style="max-width: 50px;">
            </a>
            <a
                href="https://discord.com/invite/ZugZ6kx?fbclid=IwAR2drRA4kaVWvoINfxgpNy0jpSTvlhnti2WXD7Tdn8qgFzOtvNe4XQgB97s">
                <img src="images/discord_logo.png" alt="Contact Discord" style="max-width: 50px; padding-left: 10px;">
            </a>
            <a href="mailto:delayantoi@eisti.eu">
                <img src="images/mail_logo.png" alt="Contact Discord" style="max-width: 50px; padding-left: 10px;">
            </a>
            <a href="https://t.me/joinchat/AAAAAErLDiZ5i7g-By4adQ">
                <img src="images/telegram_logo.png" alt="Contact Telegram" style="max-width: 50px; padding-left: 10px;">
            </a>

        </ul>
    </footer>





    <script src="connexion.js"></script>

</body>