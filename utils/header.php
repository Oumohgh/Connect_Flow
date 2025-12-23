<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Gestion des Contacts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body class="d-flex flex-column min-vh-100">


    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="profil.php">
                Gestion des Contacts
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contacts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-warning fw-semibold" href="logout.php">
                            Deconnexion
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>