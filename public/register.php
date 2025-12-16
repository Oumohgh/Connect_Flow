<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">


    <?php
                                if (isset($_POST['submit'])) {
                                    if (empty($_POST['name'])) {
                                        $msg_nom = "Veillez enter votre nom";
                                    }

                                    $nom_subject = $_POST['name'];
                                    $nom_pattern = '/^[a-zA-Z]*$/';
                                    preg_match($nom_pattern, $nom_subject, $name_matches);
                                    if (! $name_matches[0]) {
                                        $msg2_nom = "Juste les alphabets ";
                                    }

                                }
                            ?>

    <?php include 'includes/header.php'?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h3 class="text-center mb-4">Inscription</h3>


                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <!--les donnees seront traits uniquement par le script PHP  dans ce fichier. Vous pouvez opter pour lenvoi des données du formulaire vers un fichier different -->
                            <div class="mb-3">
                                <label class="form-label">Nom d'utilisateur<span class="note">*</span>:</label>
                                <input type="text" name="nom" placeholder="Veillez entre votre nom" minlength="3"
                                    required>
                                <?php if(isset($msg_nom)) {
                                    echo "<p class='note'>".$msg_nom."</p>";
                                    }?>
                                <?php if(isset($msg_nom))
                                { echo "<p class='note'>".$msg2_nom."</p>";
                                    }?>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mot de passe</label>
                                <input type="password" class="form-control"  placeholder="Entrer un fort mot de passe" minlength="6" required>
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <?php
                                if (isset($_POST['submit'])) {
                                    if (empty($_POST['nom'])) {
                                        $msg_nom = "Veillez enter votre nom";
                                    

                                    $nom_subject = $_POST['nom'];
                                    $nom_pattern = '/^[a-zA-Z]*$/';
                                    preg_match($nom_pattern, $nom_subject, $name_matches);
                                    if (! $name_matches[0]) {
                                        $msg2_nom = "Juste les alphabets et les espaces  ";
                                    }
                                }

                                }

                            ?>

                            <button class="btn btn-success w-100" name="submit">Creer le compte</button>

                            <?php
                            //validation complete
                                if (isset($_POST['submit'])) {
                                    if ($msg2_nom == "" && $msg_nom == "") {
                                        $msg_reussit = "Vous avez correctement creer un compte";
                                    }

                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
<?php include 'includes/footer.php'?>