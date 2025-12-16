<?php include'includes/header.php'?>
<?php
session_start();

?>

<body class="bg-light ">

    <div class="container mt-5 mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Connexion</h3>


                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nom d'utilisateur</label>
                                <input type="text" name="name" class="form-control" required>


                                <div class="mb-3">
                                    <label class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" required>
                                </div>
                            </div>

                                <button class="btn btn-primary w-100" name="submit" type="submit">Connexion</button>
                                <if

                        </form>


                        <p class="text-center mt-3">
                            <a href="register.php">Creer un compte</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    



    <?php include'includes/footer.php'?>