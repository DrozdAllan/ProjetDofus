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
                                <?php if (isset($_SESSION['pseudo'])) {
                                    echo 'Votre pseudo : ' . $_SESSION['pseudo'] . '<br>';
                                    echo 'Entrez votre message : <input type="text" placeholder="Message" name="Message">';
                                    echo '<button type="submit"> Envoyer </button>';
                                } else {
                                    echo 'Vous devez vous connecter pour poster sur le forum';
                                   echo "<a href='PageConnexion.php'><button class='btop'>CONNEXION</button></a>";
                                 }
                                ?>
                            </span><br><br>
                        </form>

                        <div style="Border:Auto;">
                            <h3> LES 10 DERNIERS MESSAGES </h2>




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

</html>