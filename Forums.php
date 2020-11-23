<?php session_start();

include_once('PageBanner.php');
require_once('libraries/database.php');
?>

<html>
<div class="bgimg">


    <div class="container creation">

        <div class="row">
            <div class="col-12 col-lg-7">

                <div class="row header">

                    <h2 class="title"> FORUMS </h2>

                    <div class="col">
                        <form method="POST" action="ForumsInput.php">
                            <span>
                                <?php if (isset($_SESSION['id']) and isset($_SESSION['pseudo'])) : ?>
                                    <div>
                                        <?php echo 'Votre pseudo : ' . $_SESSION['pseudo'] . '<br>'; ?>
                                        <span> Entrez votre message : <input type="text" placeholder="Message" name="Message"><br>
                                            <button type="submit" class="btop">ENVOYER</button>
                                        </span>
                                    </div>
                                <?php else : ?>
                                    <span> <?php echo 'Vous devez vous connecter pour poster sur le forum'; ?>

                                    <a href="PageConnexion.php"><input type="button" class="btop" value="CONNEXION"></a>
                                </span>
                                <?php endif; ?>
                            </span><br><br>
                        </form>

                        <h3> LES 10 DERNIERS MESSAGES </h3>




                        <?php

                        $pdo = getPdo();

                        $query = $pdo->query("SELECT pseudo, message, msg_date FROM Chat ORDER BY ID DESC LIMIT 10")->fetchAll();

                        foreach ($query as $row) {
                            echo $get_pseudo = $row['pseudo'] . " a écrit : ";
                            echo "<b>" . $get_message = $row['message'] . "</b><br>";
                            echo "<sub>" . $get_date = $row['msg_date'] . "</sub> <br> <br>";
                        }


                        $conn = null;

                        ?>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</html>