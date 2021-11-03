<?php
if(isset($_POST['formsignin'])){
    echo 'ff';
    //avoid writting all the $_POST['Nom'] for the check
    extract($_POST);
    if($mdp == $cmdp){
        $options = [
            'cost' => 12,
        ];
        
        //cryptage, hashage de mot de passe à l'aide de BCRYPT
        $hashpass = password_hash($mdp, PASSWORD_BCRYPT, $options);
        echo $hashpass;
        
        //on regarde si le pseudo ou l'email n'est pas déjà présent dans la bdd
        $c = $db->prepare("SELECT email, pseudo FROM user");
        $c ->execute([
            'email' => $email,
            'pseudo' => $pseudo
        ]);
        $result = $c->rowCount();
        // 0 = n'existe pas, 1 = existe déjà
        if($result==0){
            //insert informations from the person in the database
            $user = $db->prepare("INSERT INTO user(pseudo, nom, prenom, password, email, gender, birth_date) VALUES(:pseudo, :nom, :prenom, :password, :email, :gender, :birth_date)");
            $user->execute([
                'pseudo' => $pseudo,
                'nom' => $nom,
                'prenom' => $prenom,
                'password' => $hashpass,
                'email' => $email,
                'gender' => $gender,
                'birth_date' => $birth_date
            ]);

            $music_user = $db->prepare("INSERT INTO music_user(instrument, lequel, cours_musique, concert, aisance, note_aisance) VALUES(:instrument, :lequel, :cours_musique, :concert, :aisance, :note_aisance)");
            $music_user->execute([
                'instrument' => $choix_instru,
                'lequel' => $instrument,
                'cours_musique' => $cours,
                'concert' => $concert,
                'aisance' => $aisance,
                'note_aisance' => $note
            ]);







            echo "le compte a été crée";
            ?>
            <?php
        }

        else{
            echo "Cet email ou ce pseudo existe déjà";
        }
    }

    else{
        echo "Les mdp sont différents. Veuillez réessayer";
    }
}
?>

