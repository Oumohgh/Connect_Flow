<?php include('utils/header.php'); ?>



<div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
    <div class="col-lg-5 col-md-7 col-sm-10">

        <div class="contact-card p-4">
            <h3 class="text-center text-success fw-bold mb-4">
                Ajouter un nouveau contact
            </h3>

            <form id="form_con" method="POST" action="logic/crud/addcontact.php">

                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" name="fnamecon" class="form-control" placeholder="Entrez le prénom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="lnamecon" class="form-control" placeholder="Entrez le nom" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="exemple@email.com">
                </div>

                <div class="mb-3">
                    <label class="form-label">Telephone</label>
                    <input type="text" name="phone" class="form-control" placeholder="+212 ...">
                </div>

                <div class="mb-4">
                    <label class="form-label">Adresse</label>
                    <input type="text" name="address" class="form-control" placeholder="Ville, rue...">
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" name="submit" class="btn btn-success fw-semibold">
                         Enregistrer
                    </button>

                    <a href="contact.php" class="btn btn-outline-success">
                         Retour
                    </a>
                </div>

            </form>
        </div>

    </div>
</div>

<?php include('utils/footer.php'); ?>
