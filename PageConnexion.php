<?php include_once("PageBanner.php");
?>
<div class="bgimg">
    <div class="container creation">

        <div class="row">
            <div class="col-12 col-lg-12">

                <div class="row header">

                    <h2 class="title">CONNEXION</h2>

                    <div class="col">

                        <form action="VerifConnexion.php" target="_blank" method="post" enctype="multipart/form-data">

                            <input type="text" id="Compte" placeholder="Nom de compte" name="ConnexionCompte">

                            <input type="password" id="Mdp" placeholder="Mot de passe" name="ConnexionMdp">

                            <button type="submit" class="terminsc"> SE CONNECTER </button>


                        </form>
<span> Pas encore de compte ? <a href="Inscription.php"> <button class="btop"> INSCRIPTION </button> </a> </span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<?php include("PageBas.php");
?>