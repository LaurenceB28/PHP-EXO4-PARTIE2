<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4phpP2</title>
</head>

<body>
    <p><?php
        $age = 18;

        if ($age >= 18) {
            $majeur = true;
            echo 'Tu es majeur';
        } 
        
        else {
            $majeur = false;
            'Tu es mineur';
        }
        ?>
    </p>

</body>

</html>