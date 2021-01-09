<?php
//Exemplo de array_merge
//Serve para unir um ou mais array
/*
    $array1 = array("cor" => "vermelho",2,4);
    $array2 = array("a","b","cor" => "verde", "forma" => "trapezóide",4);
    $result = array_merge($array1, $array2);
    print_r($result);
 */

 //Exemplo de array_intersect
 //Compara os valores de duas matrizes e retorna as correspondentes
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("e"=>"red","f"=>"green","g"=>"blue");

    $result=array_intersect($a1,$a2);
    print_r($result);
?>