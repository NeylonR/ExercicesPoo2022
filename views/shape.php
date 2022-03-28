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
        if($this->result){
            echo '<h4>'.$this->result.'</h4>';
        }
    }
    ?>
    <br>
    <a href="/">Retour</a>
</body>
</html>