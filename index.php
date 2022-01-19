<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Definición de arrays en PHP</h3>

    <?php
        //Array indexado
        $amigos=array("Antón","Rosalía","Xoán");
        echo "O terceiro amigo é: " . $amigos[2]."<br/>";

        //Array asociativo
        $dnisAmigos=array("Antón"=>"12345678X","Rosalía"=>"11112222X","Xoan"=>"99997777X");
        echo "O DNI de Rosalía é: " . $dnisAmigos['Rosalía']."<br/>";

    
        echo "O segundo coche de Xoán é " .$cochesAmigos['Xóan'][1] . "<br/>";
    ?>
</body>
</html>