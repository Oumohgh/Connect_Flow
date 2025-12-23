<?php include 'utils/headero.php'; ?>


<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="col-lg-5 col-md-7 col-sm-10">

        <div class="register-card p-4">
            <h3 class="text-center text-success fw-bold mb-4">
                Créer un compte
            </h3>

            <form id="form_ins" method="POST" action="logic/inscription.php">

                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" name="fname" class="form-control" placeholder="Votre prénom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="lname" class="form-control" placeholder="Votre nom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email_user" class="form-control" placeholder="exemple@email.com" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Confirmer le mot de passe</label>
                    <input type="password" name="chek_password" class="form-control" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success w-100 fw-semibold">
                    S’inscrire
                </button>

                <div class="text-center mt-3">
                    <span class="text-muted">Deja tu as un compte </span>
                    <a href="login.php" class="text-success fw-semibold text-decoration-none">
                        Se connecter
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>

<script src="assets/script.js"></script>
<?php include 'utils/footer.php'; ?>
