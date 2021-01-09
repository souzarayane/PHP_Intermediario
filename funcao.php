<?php
    //Função

    function mostrarNome($nome,$idade){
        echo "<h2>Nome é: </h2>" .$nome;
        echo "<hr>";
        echo "A idade é: ".$idade." anos";
    }

    //mostrarNome("Joaquina",200);

    function calculadora($numero1 = 10, $numero2 = 5){
        echo($numero1 + $numero2);
    }

    //calculadora();

    function verdade(){
        return true;
    }

    function retornarString(){
        return"Joaquina";
    }

    echo retornarString();

    $variavel = verdade();
?>