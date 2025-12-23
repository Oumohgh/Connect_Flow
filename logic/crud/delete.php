<?php 
require('./config/db.php'); 
include('../utils/header.php'); 

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $sql = "SELECT * FROM contacts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);


        $sqlDelete = "DELETE FROM contacts WHERE id = :id";
        $stmtDelete = $conn->prepare($sqlDelete);
        $stmtDelete->execute([':id' => $id]);
    } else {
        echo "<div class='alert alert-warning text-center mt-5'>Contact non trouve</div>";
        exit;
    }
} else {
    echo "<div class='alert alert-warning text-center mt-5'>ID non specifie</div>";
    exit;
}
?>

<div class="container my-5">
    <h1 class="text-center bg-info text-white py-3 mb-4">Suppression d'utilisateur</h1>

    <h3 class="alert alert-success text-center">
        <?= "Le contact " . htmlspecialchars($row['firstname'] . " " . $row['lastname']) . " a ete supprime" ?>
    </h3>
</div>

<?php 
header('refresh:2;url=../contact.php'); 
include('../utils/footer.php'); 
?>
