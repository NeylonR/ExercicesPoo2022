<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poisson</title>  
</head>
<body>
    <h2>Vous trouvez <?= $this->poisson->rest() ?></h2>

    <a href="/identifyPoisson">Lui demander son nom.</a>
    <a href="/observePoisson">L'observer.</a>
    <a href="/catchPoisson">Essayer de l'attraper !</a>

    <a href="/">Retour</a>
</body>
</html>