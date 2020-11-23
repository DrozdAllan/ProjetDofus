<?php header("Cache-Control: no-cache, must-revalidate"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- IMPORTS DE SCRIPT -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha384-/LjQZzcpTzaYn7qWqRIWYC5l8FWEZ2bIHIz0D73Uzba4pShEcdLdZyZkI4Kv676E" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="scriptDofousse.js"></script>


    <!-- IMPORTS DE STYLE  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styleDofousse.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">




    <title>Dofousse</title>
</head>

<body>
    <div class="Bandeau1">

        <div class="container">

            <div class="row">

                <div class="col-3">
                    <a target="_blank" href="https://ankama.com">

                        <img class="AnkamaGris" id="Brouille" src="Templates/Ankama_(2011)_Logo.png" style="height:30px;">
                        </span>
                    </a>

                    <a target="_blank" href="https://ankama_support.com">

                        <button class="btop" type="button">support</button>
                    </a>


                </div>
                <div class="col-6">

                    <?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) : ?>
                        <div>
                            <?php echo 'Bonjour ' . $_SESSION['pseudo']; ?>
                            <a href="PageDeconnexion.php"><button class="btop">DECONNEXION</button></a>
                        </div>
                    <?php else : ?>
                        <div>
                            <a href="PageConnexion.php"><button class="btop">CONNEXION</button></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-3">
                    <select class="pays btop">
                        <option> FR</option>
                        <option> EN </option>

                    </select>

                </div>
            </div>
        </div>
    </div>




    <nav class="navbar sticky-top navbar-expand-md navbar-custom" id="blablacar">



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="material-icons roulant">accessible</span> <span class="btop">DOFUS C'EST DE LA MERDE MDR </span>
        </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav navgauche">

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="Inscription.php" role="button" data-toggle="dropdown">
                            JEU <span class="material-icons roulant">accessible</span>
                        </a>
                        <ul class="dropdown-menu popo">
                            <div class="container navcont">
                                <div class="row" style="width: 80%;">
                                    <div class="col-md-3">
                                        <li><a class="dlo" href="https://www.dofus.com/fr/mmorpg/telecharger">Téléchargez le
                                                jeu</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/jouer">Créez votre
                                                compte</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/parrainage">Code cadeau</a>
                                        </li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/encyclopedie">Encyclopédie</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/annuaires/pages-persos">Annuaires</a>
                                        </li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/ladder">Ladders</a></li>
                                        <li><a class="item" href="http://www.krosmoz.com/fr/almanax?game=dofus">Almanax</a>
                                        </li>

                                    </div>
                                    <div class="col-md-3">
                                        <li><span class="pun">Comment jouer</span></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/decouvrir">Découvrir</a>
                                        </li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/encyclopedie/classes">Classes</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/tutoriels">Apprendre à
                                                jouer</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/ladder/kolizeum-presentation">Ligues
                                                Kolizeum</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/serveurs">État
                                                des serveurs</a></li>

                                    </div>
                                    <div class="col-md-6">

                                        <li><span class="pun">Avantage abonnés</span></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/pourquoi-s-abonner">Pourquoi s'abonner
                                                ?</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/communaute/veterans-rewards">Veteran
                                                rewards</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/dofus-retro">DOFUS retro</a></li>
                                        <img class="ocre" src="Templates/dofus_ocre.png">

                                    </div>


                                </div>

                            </div>
                        </ul>

                    </li>



                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            TRANSMÉDIA <span class="material-icons roulant">accessible</span>
                        </a>
                        <ul class="dropdown-menu popo">
                            <div class="container navcont">
                                <div class="row" style="width: 80%;">
                                    <div class="col-md-3">
                                        <li><a class="dlo" href="https://www.ankama-shop.com/">Acheter des produits
                                                dérivés</a></li>
                                        <li><a class="item" href="https://www.ankama.com/fr/editions">Editions</a></li>
                                        <li><a class="item" href="https://www.ankama.com/fr/games">Jeu video</a></li>


                                    </div>
                                    <div class="col-md-3">
                                        <li><span class="pun">Jeu de plateau</span></li>
                                        <li><a class="item" href="http://www.ankama.com/fr/boardgames/krosmaster-blast">Krosmaster
                                                Blast</a></li>
                                        <li><a class="item" href="http://www.krosmaster.com/">Krosmaster</a></li>
                                        <li><a class="item" href="https://www.ankama-shop.com/fr/dofus/1578-brothers.html">Brother</a>
                                        </li>
                                        <li><span class="pun">Animation</span></li>
                                        <li><a class="item" href="http://www.dofus-le-film.com/">Le film</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/animation/univers">La série</a>
                                        </li>
                                    </div>
                                    <div class="col-md-6">

                                        <li><span class="pun">Médias</span></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/medias/trailers">Vidéos</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/medias/screenshots">Screenshots</a>
                                        </li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/medias/illustrations">Illustrations</a>
                                        </li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/medias/emissions">Emissions</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/medias/wallpapers">Wallpapers</a></li>
                                        <img class="ocre2" src="Templates/dofus_ocre.png">

                                    </div>


                                </div>

                            </div>
                        </ul>

                    </li>

                    <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            ACTUALITÉS <span class="material-icons roulant">accessible</span>
                        </a>
                        <ul class="dropdown-menu popo">
                            <div class="container navcont">
                                <div class="row" style="width: 80%;">
                                    <div class="col-md-4">
                                        <li><a class="dlo" href="https://www.dofus.com/fr#pandala-details">Découvrir la
                                                dernière mise à jour</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/actualites/news">Toutes
                                                les news</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/actualites/devblog">Tous
                                                les devblogs</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/actualites/maj">Toutes les
                                                mises à jour (changelog)</a></li>


                                    </div>
                                    <div class="col-md-4">
                                        <li><span class="pun">En ce moment sur dofus</span></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/actualites/serveur-monocompte-retro">Serveur
                                                retro monocompte</a></li>
                                        <li><a class="item" href="https://www.dofus.com/fr/mmorpg/actualites/news/1087675-kta-esport-dofus-2020">KTA
                                                : season 4</a></li>

                                    </div>
                                    <div class="col-md-4">


                                        <img class="ocre3" src="Templates/dofus_ocre.png">

                                    </div>


                                </div>

                            </div>
                        </ul>

                    </li>


                </ul>


            </div>


            <div class="col-4">
                <div class="triangle">  <a class="navbar-brand" href="Inscription.php"><img src="Templates/Dofus_Logo.png"></a> </div>
               
            </div>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav navdroite">

                    <a class="nav-link btndroite" href="Forums.php">FORUMS</a>



                </div>
            </div>
        
    </nav>




</body>

</html>