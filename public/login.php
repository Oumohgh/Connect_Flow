<?php include'includes/header.php'?>


<body class="bg-light">

<div class="container mt-5">
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card shadow">
<div class="card-body">
<h3 class="text-center mb-4">Connexion</h3>


<form  method="post">
<div class="mb-3">
<label class="form-label">Nom d'utilisateur</label>
<input type="text" class="form-control" required>
</div>


<div class="mb-3">
<label class="form-label">Mot de passe</label>
<input type="password" class="form-control" required>
</div>


<button class="btn btn-primary w-100">Connexion</button>
</form>


<p class="text-center mt-3">
<a href="register.php">Creer un compte</a>
</p>
</div>
</div>
</div>
</div>
</div>


</body>
</html>
<?php include'includes/footer.php'?>