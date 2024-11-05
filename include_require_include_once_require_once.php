<?php
/**
 * Quando estamos trabalhando com vários arquivos em PHP, separadamente, podemos incluí-los um dentro do 
 * outro, puxando funções, classes, etc, de um arquivo para outro. 
 * 
 *  - include: O arquivo tenta ser incluído, caso não exista um Warning é emitido e a execução do código segue
 *              normalmente. Para não visualizarmos o warning, podemos colocar um @ antes do include.
 *              @include "arquivo.php";
 *
 *  - require: O arquivo requisitado é obrigatório. Caso ele não exista, um erro fatal é exibido.
 * 
 *  - include_once: Ele dá um include apenas uma unica vez no código. Assim que usado é descartado. Não podemos
 *                  incluir o mesmo arquivo novamente.
 * 
 *  - require_once: Mesma coisa que o exemplo anterior, diferença que o arquivo requerido é obrigatório de
 *                  existir e estar funcionando.
 */
?>