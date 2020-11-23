<?php session_start();
require_once('inscription_post.php');
require_once('libraries/randomizer.php');

include_once('PageBanner.php');

?>

<div class="bgimg">

    <div class="container creation">

        <div class="row">
            <div class="col-12 col-lg-7">

                <div class="row header">

                    <h2 class="title">CRÉEZ VOTRE COMPTE </h2>

                    <div class="col">


                        <div class="row">



                            <div class="col-4 border-right">




                                <label class="clicfb">En quelques clics avec...</label>
                                <a href="#"><img class="fb" src="Templates/facebook-logo.png"></a>


                            </div>

                            <div class="col-8">

                                <!-- LE FORMULAIRE ICI SA MERE  -->
                                <form action="Inscription.php" method="post" enctype="multipart/form-data" id="inscr">

                                    <label class="gras">Nom de compte*</label>

                                    <!-- vérif pseudo déjà pris -->
                                    <div <?php if (isset($name_error)) : ?> class="form_error" <?php endif ?>>
                                        <input type="text" placeholder="Nom de compte" id="Compte" name="Compte" value="<?php $Compte ?>" oninput="setCustomValidity('')">
                                        <?php if (isset($name_error)) : ?>
                                            <span><?php echo $name_error; ?></span>
                                        <?php endif ?>
                                    </div>

                                    <button type="button" class="gename gras">GÉNÉRER UN NOM DE
                                        COMPTE</button>
                                    <br>

                                    <label class="gras">Mot de passe*</label>
                                    <input type="password" placeholder="Mot de passe" id="Mdp" name="Mdp" oninput="setCustomValidity('')">

                                    <label class="gras">Confirmation du mot de passe*</label>
                                    <input type="password" placeholder="Confirmation du mot de passe" id="ConfirmMdp" oninput="setCustomValidity('')">

                                    <label class="gras">E-mail*</label>

                                    <!-- vérif mail déjà pris -->
                                    <div <?php if (isset($email_error)) : ?> class="form_error" <?php endif ?>>
                                        <input type="email" placeholder="E-mail" id="Mail" name="Mail" value="<?php $Mail ?>" oninput="setCustomValidity('')">
                                        <?php if (isset($email_error)) : ?>
                                            <span><?php echo $email_error; ?></span>
                                        <?php endif ?>
                                    </div>

                                    <label class="gras">Date de naissance*</label>

                                    <div class="Naissance">
                                        <input type="date" id="naissance" name="naissance" max="2002-10-18">

                                    </div>


                                    <input type="checkbox" class="notin" id="Newsletter" name="Newsletter" value="NewsOn"> Je souhaite recevoir toute
                                    l'information sur DOFUS
                                    grâce à la
                                    newsletter Ankama. <br> <br>

                                    <div class="userterm"> En vous inscrivant, vous confirmez avoir lu, compris et
                                        accepter
                                        les Conditions d'utilisation et la Politique de confidentialité ainsi qu'être
                                        informé(e) de votre droit à l'information. </div>




                                    <button type="submit" id="terminscription" class="terminscription" name="terminsc" onclick="setCustomValidity('')">TERMINER L'INSCRIPTION </button>
                                </form>


                                <div>J'ai déjà un compte - <a href="#"> Télécharger DOFUS </a></div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <div class="col">
            </div>

        </div>

        <br>
        <div class="row header2">
            <div class="col-6">
                <div class="row">

                    <span class="jdr"> Jeu de rôle dofus </span>

                    <div class="col testimg">
                        <img class="imgbot" src="Templates/illu_block_register.png">
                    </div>
                </div>
            </div>
            <div class="col-6 testext">
                <div>

                    <b>RPG online</b>, DOFUS vous propulse dans un univers médiéval fantastique teinté d'humour.
                    Incarnez une des
                    18 classes de personnages, du guerrier fonceur au mage élémentaliste, du barbare enragé au
                    soigneur,
                    du
                    chasseur de trésor au protecteur de la nature, en passant par le berzerk, l'invocateur et
                    l'assassin
                    !
                    Fondez une guilde avec vos amis et partez en quête des œufs de dragon : les Dofus.
                    <br>

                    Menez des <b>combats tactiques au tour par tour</b> dans ce jeu de rôle multijoueur. Vos PA
                    permettent de
                    lancer des sorts à distance ou au corps à corps. Plus vous gagnez d'XP, plus vous montez de
                    niveau.
                    Droppez des objets sur les monstres vaincus et améliorez-les grâce à la forgemagie (artisanat /
                    craft).
                    <br>
                    Dans ce jeu de stratégie PC, exercez de multiples métiers parmi les 19 proposés (chasseur,
                    alchimiste...). Gagnez des "kamas" en échange de vos services ou ressources.

                    <br>
                    Retrouvez aussi dans ce <b>RPG tour par tour</b> : combats JCJ, colisée, matchmaking, élevage de
                    montures,
                    familiers, hôtels de vente et même un serveur héroïque où l'XP et le drop sont doublés, mais la
                    mort
                    y
                    est définitive. Une aventure unique inégalée vous attend dans ce jeu en ligne PC !

                </div>
            </div>

        </div>


    </div>



</div>



<footer class="bot">

    <div class="container popo">
        <div class="row">

            <div class="col">

                <div class="row">
                    <div class="col">
                        osef du bas de page



                    </div>
                    <div class="col">
                        osef du bas de page


                    </div>


                </div>
            </div>
            <div class="col">

                <div class="row">
                    <div class="col">
                        osef du bas de page
                    </div>
                    <div class="col">
                        osef du bas de page
                    </div>
                </div>
            </div>
            <div class="col">

                <button type="button" class="dlbot" href="#">LE JEU</button>
            </div>
        </div>
    </div>

    </div>













</footer>



</body>

</html>