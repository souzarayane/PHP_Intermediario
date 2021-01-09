<?php
    //Exemplo de Switch
    $nome = 'Tião';

    /*
    switch($nome){
        case 'Guilherme':
            echo 'Minha variável é Guilherme';
            break;
        case 'Maria':
            echo 'Minha variável é Maria';
            break;
        case 'Tião':
            echo 'Minha variável é Tião';
            break;        
    }
    
    echo '<br />';
    */

    //Exemplo de uso para o break
    //Pode ser usado para os loopings for, while, do, foreach e switch
    /*
    for($i = 0; $i < 11; $i++){
        echo $i;
        echo '<hr>';
    if($i == 5)
        break;    
    }
    */

    //Exemplo de continue
    //Continue usado nos loopings de: for, while, do e foreach

    for($i = 0; $i < 10; $i++){
        if($i == 5 || $i == 9)
        continue;

        echo $i;
        echo '<hr>';
    }
?>