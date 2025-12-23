<?php
session_start();
include('utils/header.php');

$firstname = $_SESSION['firstname_user'];
$lastname = $_SESSION['lastname_user'];
$date = $_SESSION['date_inscription'];
$email = $_SESSION['email_user'];
?>



<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="col-lg-5 col-md-7 col-sm-10">

        <div class="profile-card p-4 text-center">

            <h2 class="fw-bold mb-3 text-success">Profil</h2>
            <h4 class="mb-3">Bienvenue <?= htmlspecialchars($firstname) ?></h4>

            <img src="utils/avatar.png" alt="avatar" class="rounded-circle profile-img mb-3">

            <p class="mb-2"><strong>Nom :</strong> <?= htmlspecialchars($firstname . " " . $lastname) ?></p>
            <p class="mb-2"><strong>Date d’inscription :</strong> <?= htmlspecialchars($date) ?></p>
            <p class="mb-3"><strong>Email :</strong> <?= htmlspecialchars($email) ?></p>

            <div class="d-flex justify-content-center gap-2 mb-2">
                <a href="contact.php" class="btn btn-success fw-semibold"> Contacts</a>
                <a href="logic/log_out.php" class="btn btn-danger fw-semibold"> Deconnexion</a>
            </div>

        </div>

    </div>
</div>

<?php include('utils/footer.php'); ?>
