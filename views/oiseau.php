<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oiseau</title>
</head>
<body>
    <h2>Vous trouvez <?= $oiseau->rest() ?></h2>

    <a href="/identifyOiseau">Lui demander son nom.</a>
    <a href="/observeOiseau">L'observer.</a>
    <a href="/catchOiseau">Essayer de l'attraper !</a>

    <a href="/">Retour</a>
</body>
</html>