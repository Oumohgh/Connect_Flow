<?php include('includes/header.php')
?>
<div class="container mt-4">
<div class="row">


<div class="col-md-8">
<h4>Liste des contacts</h4>
<table class="table table-bordered table-hover">
<thead class="table-light">
<tr>
<th>Nom</th>
<th>Téléphone</th>
<th>Email</th>
<th>Adresse</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
<tr>
<td>Ahmed</td>
<td>+212</td>
<td>ahmed@mail.com</td>
<td>Casablanca</td>
<td>
<button class="btn btn-warning btn-sm">Modifier</button>
<button class="btn btn-danger btn-sm">Supprimer</button>
</td>
</tr>
</tbody>
</table>
</div>


<div class="col-md-4">
<h4>Ajouter / Modifier</h4>
<form>
<div class="mb-2">
<label class="form-label">Nom</label>
<input type="text" class="form-control" required minlength="2">
</div>
<div class="mb-2">
<label class="form-label">Telephone</label>
<input type="text" class="form-control">
</div>
<div class="mb-2">
<label class="form-label">Email</label>
<input type="email" class="form-control" required>
</div>
<div class="mb-2">
<label class="form-label">Adresse</label>
<textarea class="form-control" maxlength="255"></textarea>
</div>
<button class="btn btn-primary w-100 mt-2">Enregistrer</button>
</form>
</div>


</div>
</div>


</body>
</html>