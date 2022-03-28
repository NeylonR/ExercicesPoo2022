<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oiseau</title>
</head>
<body>
    <h3>Vous demandez son nom à l'oiseau.</h3>
    <p><?= $this->oiseau->identify(); ?>.</p>
    <a href="/observeOiseau">L'observer.</a>
    <a href="/catchOiseau">Essayer de l'attraper !</a>

    <a href="/oiseau">Retour</a>
</body>
</html>