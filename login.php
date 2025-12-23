<?php include('utils/headero.php');
session_start();
 if (isset($_SESSION['id'])) {
    header("Location: profil.php");
 }
?>




<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="col-lg-4 col-md-6 col-sm-10">

        <div class="login-card p-4">
            <h3 class="text-center text-success fw-bold mb-4">
                Connexion
            </h3>

            <form method="POST" action="logic/login.php">

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email"
                           name="user_email"
                           class="form-control"
                           placeholder="exemple@email.com"
                           required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Mot de passe</label>
                    <input type="password"
                           name="password"
                           class="form-control"
                           required>
                </div>

                <button type="submit" name="submit" class="btn btn-success w-100 fw-semibold">
                    Se connecter
                </button>

                <div class="text-center mt-3">
                    <span class="text-muted">Pas encore de compte ?</span>
                    <a href="inscription.php" class="text-success fw-semibold text-decoration-none">
                        Creer un compte
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>

<script src="utils/script.js"></script>
<?php include('utils/footer.php'); ?>
