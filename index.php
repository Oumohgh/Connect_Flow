<?php 
session_start();
 if (isset($_SESSION['id'])) {
    header("Location: profil.php");
 }
?>
<?php include('utils/headero.php'); ?>
<main class="d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-5 fw-bold mb-4">
            Bienvenue sur notre plateforme de gestion des contacts
        </h1>

        <p class="lead mb-5">
            Gerez, organisez et retrouvez facilement tous vos contacts professionnels 
            et personnels dans un seul espace securise, simple et rapide.
        </p>

        <a href="inscription.php" class="btn btn-light btn-lg text-success fw-bold">
            Commencer maintenant
        </a>
    </div>
</main>
<?php include('utils/footer.php'); ?>