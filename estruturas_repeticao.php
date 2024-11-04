<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutras de repetição</title>
</head>
<body>
    <?php
        $contador = 1;    
        //while
        while($contador <= 10){
            echo "$contador <br>";
            $contador++;
        }

        echo '<br>';

        //do while
        $contador = 0;
        do{
            echo "$contador <br>";
            $contador++;  
        }while($contador<=10);

        echo '<br>';

        //for
        for($contador=0; $contador<=10; $contador++){
            echo "$contador <br>";
        }
        echo '<br>';

        //for numa lista
        /*Caso hava uma lista que eu não sei o tamanho, posso passar count como parâmetro.*/
        $lista = ['bola', 'gol', 'casa', TRUE, 3.14, 1, 2, 3, 'calabresa', 10];
        for($contador=0; $contador<count($lista); $contador++){
            echo "$lista[$contador]<br>";
        }
        echo '<br>';

        //foreach
        $produtos = ['Sofá','Mesa','Bidê', 'Cedeira', 'Fogão', 'Geladeira'];

        foreach($produtos as $produto){
            echo $produto.'<br>';
        }
    ?>

</body>
</html>