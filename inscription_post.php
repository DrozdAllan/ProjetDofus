

<html>
<div class="bgimg roulant">


    <?php

require_once('libraries/database.php');
 
$pdo = getPdo();

        // Recup donnees form sans verif

        if (isset($_POST['terminsc'])) {
            $Compte = $_POST['Compte'];
            $Mail = $_POST['Mail'];
            $Mdp = htmlspecialchars($_POST['Mdp']);
            $naissance = htmlspecialchars($_POST['naissance']);
            $Newsletter = !empty($_POST['Newsletter']) ? $_POST['Newsletter'] : "NewsOff";


            // Verif Pseudo et mail deja pris
            $sql_u = $pdo->prepare("SELECT * FROM infodesgens WHERE Compte='$Compte'");
            $sql_u->execute();
            $res_u = $sql_u->fetchAll();
            $sql_e = $pdo->prepare("SELECT * FROM infodesgens WHERE Mail='$Mail'");
            $sql_e->execute();
            $res_e = $sql_e->fetchAll();

            if (!empty($res_u)) {
                $name_error = "CHANGE DE PSEUDO IL EST DEJA PRIS SALE TANTE";
            } else if (!empty($res_e)) {
                $email_error = "Email déjà pris";
            } else {

                //Hash Mdp pour plus de sécu (à récup avec password_verify)
                $options = ['cost' => 12];
                $MdpHash = password_hash($Mdp, PASSWORD_BCRYPT, $options);
                
                // preparation(plus safe)
                $sth = $pdo->prepare("INSERT INTO infodesgens (Compte, Mdp, Mail, Naissance, Newsletter)
    VALUES ('$Compte', '$MdpHash' ,'$Mail','$naissance','$Newsletter')");

                //execution
                $sth->execute();

                // $test=$pdo->lastInsertId();
                // echo $test;
                // var_dump($Newsletter); POUR TESTER UNE VARIABLE

                // echo 'Merci pour votre inscription : ' . $Compte . ' ! Veuillez maintenant cliquer sur le bouton pour être redirigé vers une page de connexion <br />';
                header('Location: PageSuccessCo.php');
            }
        }


    $conn = null;

    
    ?>








</div>

</html>