<?php
    //session_start();
    require_once 'db.php';
?>


<?php include 'includes/header.php'?>

<div class="container text-center mt-5">
    <h1 class="mb-3">Bienvenue</h1>
    <p class="text-muted">Une application simple et securisee pour gerer vos contacts</p>


    <div class="mt-4">
        <a href="register.php" class="btn btn-primary btn-lg me-3">S’inscrire</a>
        <a href="login.php" class="btn btn-outline-secondary btn-lg">Connexion</a>
    </div>
</div>

<?php include 'includes/footer.php'?>


</body>

</html>