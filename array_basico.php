<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array básico em PHP</title>
</head>
<body>
    <?php
        //forma 0 de criação:
        $lista_numeros = [1, 2, 3, 4, 5, 6];

        //forma 1 de criação:
        $lista_compras[1] = 'Feijão';
        $lista_compras[2] = 'Arroz';
        $lista_compras[3] = 'Batata';
        $lista_compras[4] = 'Maionese';
        $lista_compras[5] = 'Vina';

        //forma 2 de crição(Array associativo):
        $lista_compras2 = array(1 => 'Feijão', 2 => 'Arroz', 3 => 'Batata', 4 => 'Maionese', 5 => 'Vina');
    
        /*
        Para imprimir um array, as funções echo e print não funcionam pois não sabem interpretar.
        Para imprimir arrays utilizamos as funções:
        */
        var_dump($lista_numeros); //saída mais complexa(com mais informações a respeito do array) 
        echo('<br>');

        print_r($lista_numeros);
        echo('<br>');

        var_dump($lista_compras); //saída mais complexa(com mais informações a respeito do array) 
        echo('<br>');

        print_r($lista_compras2); //saída mais simples apenas com uma relação índice => valor
        echo('<br>');

        echo $lista_compras[2]; //dessa forma podemos imprimir com echo, passando o índice
        echo('<br>');

        echo $lista_compras[0]; //Não temos nada no índice 0, portanto a impressão deve ser vazia.
        echo('<br>');

        /*
        EM PHP NÃO NECESSÁRIAMENTE OS ÍNDICES PRECISAM SER NÚMEROS, ELES PODEM CONTER
        VALORES ALFANUMÉRICOS, MISTURADOS, INCLUSIVE.
        */
        $pecas['a'] = 'Parafuso';
        $pecas['b'] = 'Parachoque';
        $pecas[3] = 'Lanterna';
        $pecas[4] = 'Volante';
        $pecas[5] = 'Polia';

        var_dump($pecas);
        echo('<br>');

        echo $pecas['a']; //também podemos utilizar echo para impressão direta de um item,
                          //mesmo que o índice seja diferente de um número
        echo('<br>');
    ?>
</body>
</html>