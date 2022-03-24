<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oiseau</title>
</head>
<body>
    <h3>Vous vous mettez en retrait et observez l'oiseau.</h3>
    <p>Il <?= $oiseau->eat(); ?>.</p>

    <a href="/catchOiseau">Essayer de l'attraper !</a>
    <a href="/oiseau">Retour</a>
</body>
</html>