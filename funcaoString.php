<?php
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque id eros quis 
    felis hendrerit pharetra ornare non mi. Proin interdum ex a nunc viverra, porta egestas felis 
    auctor. Donec non odio ornare, faucibus ante tempus, mattis ipsum. Vestibulum quis turpis non 
    lacus imperdiet pellentesque sit amet at nisl. Sed id tellus at velit ornare volutpat et sit 
    amet ante. Etiam molestie id ligula sit amet semper. Curabitur magna leo, porta in malesuada 
    sed, laoreet a diam. Phasellus tincidunt blandit mi, id consequat elit placerat vel. Orci varius
    natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ac justo quis 
    dolor ullamcorper scelerisque sollicitudin vitae augue. Duis eget lorem rutrum, egestas lectus 
    in, sagittis libero. Curabitur id vehicula leo. Maecenas pretium elit in leo egestas imperdiet. 
    Cras sapien leo, lobortis quis vestibulum vulputate, scelerisque a mauris. Nullam ex justo, 
    auctor non pharetra euismod, cursus at felis.";

    //Pegando parte do texto, recortar uma string
    echo substr($conteudo,0,100);

    $nome = "Maria Joaquina de Amaral Pereira Goes";

    //Separar e transformar em um array
    $nomes = explode(' ', $nome);

    //print_r($nomes);

    //Juntar um array com um delimitador, nesse caso o espaço
    $nomes = implode(' ', $nomes);

    //echo $nomes;

    $conteudo = '<h1>Gustavo</h1>Outra coisa';

    echo strip_tags($conteudo);
?>