<?php
    if (isset($_POST['formlogin'])){
        extract($_POST);

        $q = $db->prepare("SELECT pseudo, password FROM user");
        $q->execute(['pseudo' => $lpseudo]);
        //convertir résultat en tableau
        $result = $q->fetch();

        if($result == true){ //si le compte existe
            $hashpassword = $result['password']; //on récupère mdp crypté de la bdd
            if (password_verify($lmdp, $hashpassword)){
                echo "le mdp est bon";
            }
            else{
                echo "Le mot de passe est incorrect";
                //faire mdp oublié 
            }
        }
        else{
            echo "Le compte n'existe pas";
        }   
    }


?>