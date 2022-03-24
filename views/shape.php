<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>
<body style="padding-left:10px">
    <h3>Calcul du périmetre ou de l'aire d'une forme.</h3>
    <form action="/shape" method="POST">
        <label for="edgeA">Taille du bord A</label>
        <input type="number" name="edgeA" id="edgeA" step=".01" style="margin-bottom:10px;">
        <br>
        <label for="edgeB">Taille du bord B</label>
        <input type="number" name="edgeB" id="edgeB" step=".01" style="margin-bottom:10px;">
        <br>
        <select name="shape" id="shape" style="margin-bottom:10px;">
            <option value="square">Carré</option>
            <option value="rectangle">Rectangle</option>
            <option value="triangleEquilateral">Triangle Equilateral</option>
        </select>

        <select name="math" id="math">
            <option value="perimeter">Afficher périmettre de la forme.</option>
            <option value="area">Afficher l'aire de la forme.</option>
        </select>
        <br>
        <button type="submit" style="margin-bottom:10px;">Envoyer.</button>
    </form>

    <?php
    if(isset($_POST) && !empty($_POST)){
        $edgeA = floatval($_POST['edgeA']);
        $edgeB = floatval($_POST['edgeB']);
        if($_POST['shape'] == 'square' && $edgeA > 0){
            if($_POST['math'] == 'perimeter'){
                echo "Le périmetre d'un carré dont les bords sont de ".$edgeA."cm est égal à ". $square->perimeter()."cm";
            } else if($_POST['math'] == 'area'){
                echo "L'aire du carré dont les bords sont de".$edgeA."cm est égal à ".$square->area()."cm².";
            } else{
                echo 'erreur';
            } 
        } else if($_POST['shape'] == 'rectangle' && $edgeA > 0 && $edgeB > 0){
            if($_POST['math'] == 'perimeter'){
                echo "Le périmetre d'un rectangle dont les bords sont de ".$edgeA."cm et ".$edgeB."cm est égal à ". $rectangle->perimeter()."cm";
            } else if($_POST['math'] == 'area'){
                echo "L'aire du rectangle dont les bords sont de ".$edgeA."cm et ".$edgeB."cm est égal à ".$rectangle->area()."cm².";
            } else{
                echo 'erreur';
            }
        } else if($_POST['shape'] == 'triangleEquilateral' && $edgeA > 0){
            if($_POST['math'] == 'perimeter'){
                echo "Le périmetre d'un triangle équilatéral dont les bords sont de ".$edgeA."cm est égal à ". $triangleEquilateral->perimeter()."cm";
            } else if($_POST['math'] == 'area'){
                echo "L'aire du triangle équilatéral dont les bords sont de".$edgeA."cm est égal à ".$triangleEquilateral->area()."cm².";
            } else{
                echo 'erreur';
            }
        } else{
            echo 'Erreur lors de la complétion des champs.';
        }       
    }
    ?>
    <br>
    <a href="/">Retour</a>
</body>
</html>