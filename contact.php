<?php
session_start();
include('utils/header.php');

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM contacts WHERE user_id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $user_id]);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<div class="container my-5">


    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold mb-3 mb-md-0">
             Mes contacts
        </h2>

        <a href="addcont.php" class="btn btn-success fw-semibold shadow-sm">
             Ajouter un contact
        </a>
    </div>

    <?php if ($stmt->rowCount() <= 0): ?>
    <div class="alert alert-warning text-center">
        Aucun contact trouv. Ajoutez votre premier contact.
    </div>
    <?php else: ?>

    <div class="table-card p-3">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 text-center">

                <thead class="table-success">
                    <tr>
                        <th>Prenom</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($rows as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['firstname']) ?></td>
                        <td><?= htmlspecialchars($row['lastname']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['phone']) ?></td>
                        <td><?= htmlspecialchars($row['address']) ?></td>

                        <td>
                            <a href="formulemodify.php?id=<?= $row['id']; ?>" class="btn btn-outline-success btn-sm">
                                 Modifier
                            </a>
                        </td>

                        <td>
                            <a href="logic/crud/delete.php?id=<?= $row['id']; ?>" class="btn btn-outline-danger btn-sm"
                                onclick="return confirm('Supprimer ce contact ?');">
                                Supprimer
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>

    <?php endif; ?>

</div>

<?php include('utils/footer.php'); ?>