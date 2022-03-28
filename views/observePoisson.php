<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poisson</title>
</head>
<body>
    <h3>Vous vous mettez en retrait et observez le poisson.</h3>
    <p>Il <?= $this->poisson->eat(); ?>.</p>
    <a href="/catchPoisson">Essayer de l'attraper !</a>
    <a href="/poisson">Retour</a>
</body>
</html>