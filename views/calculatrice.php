<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <a href="/">Retour.</a>
    <form action="" method="POST" style="padding:10px;">
        <input type="number" name="number1" id="number1" placeholder="Tapez un nombre." step=".001">

        <select name="operation" id="operation">
            <option value="add">Addition</option>
            <option value="sub">Substraction</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="median">Median</option>
        </select>

        <input type="number" name="number2" id="number2" placeholder="Tapez un nombre." step=".001">

        <button type="submit">Resultat.</button>
        
        <?php
        if(isset($_POST) && !empty($_POST)){
            if($this->result || $this->result == '0'){
                echo '<h4>Résultat: '.$this->result.'</h4>';
            }
        }

        
        // if(isset($_POST) && !empty($_POST)){
        //     $number1 = floatval($_POST['number1']);
        //     $number2 = floatval($_POST['number2']);

        //     if($_POST['operation'] == 'add'){
        //         echo '<h4>Resultat : '. $this->calculatrice->add($number1, $number2).'</h4>';
        //     } else if($_POST['operation'] == 'sub'){
        //         echo '<h4>Resultat : '. $this->calculatrice->sub($number1, $number2).'</h4>';
        //     } else if($_POST['operation'] == 'multiply'){
        //         echo '<h4>Resultat : '. $this->calculatrice->multiply($number1, $number2).'</h4>';
        //     } else if($_POST['operation'] == 'divide'){
        //         echo '<h4>Resultat : '. $this->calculatrice->divide($number1, $number2).'</h4>';
        //     } else if($_POST['operation'] == 'median'){
        //         echo '<h4>Resultat : '. $this->calculatrice->median($number1, $number2).'</h4>';
        //     } else{
        //         echo 'Il y a eu une erreur.';
        //     }
        // }
        ?>
    </form>
</body>
</html>