<?php
$user = 'root';
$pass = ''; //sans mdp

    try {
        $bdd = new PDO("mysql:host=localhost; dbname=universite", $user, ''); 
        //PDO qui représente une connexion de l'interface pour accéder à la base de données
    } 
    catch(PDOException $e) {
        echo "Erreur de connexion: " . $e->getMessage();
           // Affichage d'un message d'erreur en cas d'échec de la connexion
    }

    if(isset($_POST['ok'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $filiere = $_POST['filiere'];
        $numero = $_POST['numero'];
        $adresse = $_POST['adresse'];
        // Récupération de valeur des champs depuis le formulaire

        $requete = $bdd->prepare("INSERT INTO etudiants (Nom, Prenom, Date_de_naissance, Filiere, Telephone, Adresse)
            VALUES (:Nom, :Prenom, :Date_de_naissance , :Filiere, :Telephone, :Adresse)");
            // Création de la requete d'insertion dans la table 'etudiants' avec methode prepare()

        $requete->execute(
            array(
                "Nom" => $nom,
                "Prenom" => $prenom,
                "Date_de_naissance" => $date,
                "Filiere" => $filiere,
                "Telephone" => $numero,
                "Adresse" => $adresse
                // Exécution de la requête préparée avec les valeurs fournies par le formulaire
            )
        );
        header("Location: reussi.php");
        // Redirection vers la page 'reussi.php' après l'insertion des données
    }
?>
