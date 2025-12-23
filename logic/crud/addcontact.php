<?php
require('../utils/headero.php');
require('./config/db.php');
require('../utils/validation.php');
session_start();


if (!isset($_POST['submit'])) {
    header("Location: ../addcontact.php");
    exit();
}


$fnamecon = santString($_POST['fnamecon']);
$lnamecon = santString($_POST['lnamecon']);
$email = santString($_POST['email']);
$valemail = santsemail($email);
$phone = santString($_POST['phone']);
$address = santString($_POST['address']);
$user_id = $_SESSION['id'];

$error = '';
$success = '';


if (!empty($fnamecon) && !empty($lnamecon) && !empty($email) && !empty($phone) && !empty($address)) {

 
    if (minInput($fnamecon, 3) && minInput($lnamecon, 3)) {

        $sql = "INSERT INTO contacts (firstname, lastname, email, phone, address, user_id)
                VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fnamecon, $lnamecon, $valemail, $phone, $address, $user_id]);

        if ($stmt->rowCount() > 0) {
            $success = "Contact ajouté avec succès !";
            echo "<h5 class='alert alert-success text-center'>$success</h5>";
            header("refresh:2;url=../contact.php");
            exit();
        } else {
            $error = "Erreur : impossible d'ajouter le contact.";
        }

    } else {
        $error = "Prénom et Nom doivent avoir au moins 3 caractères et l’email doit être valide.";
    }

} else {
    $error = "Veuillez remplir tous les champs !";
}


if ($error) {
    echo "<h5 class='alert alert-danger text-center'>$error</h5>";
    header("refresh:2;url=../addcontact.php");
    exit();
}

require('../utils/footer.php');
?>