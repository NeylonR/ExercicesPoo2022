<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oiseau</title>
</head>
<body>
    <h3>Vous demandez son nom au poisson.</h3>
    <p><?= $this->poisson->identify(); ?>.</p>
    <a href="/observePoisson">L'observer.</a>
    <a href="/catchPoisson">Essayer de l'attraper !</a>
    <a href="/poisson">Retour</a>
</body>
</html>