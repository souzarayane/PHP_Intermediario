<?php
    //Arrays Multidimensionais

    $arr = array(array('João', 'Maria'), array(70,50));
    echo 'Nome = ' .$arr[0][1];
    echo '<br />';
    echo 'Idade = ' .$arr[1][0];

    echo '<br />';

    $carros = array("Volvo", "BMW", "Toyota");
    echo "Eu gosto de " .$carros[0]. " , " .$carros[1]. " e " .$carros[2]. " . ";
    echo "A quantidade de carros é de " .count($carros). " unidades";

    echo '<br /><br />';

    $carros1 = array(array("Volvo",22,18),
               array("BMW",15,13),
               array("Saab",5,2),
               array("Land Rover",17,15));
    
    echo $carros1[0][0]." Em estoque: ".$carros1[0][1]. ", vendidos: ".$carros1[0][2].".<br />";
    echo $carros1[1][0]." Em estoque: ".$carros1[1][1]. ", vendidos: ".$carros1[1][2].".<br />";
    echo $carros1[2][0]." Em estoque: ".$carros1[2][1]. ", vendidos: ".$carros1[2][2].".<br />";
    echo $carros1[3][0]." Em estoque: ".$carros1[3][1]. ", vendidos: ".$carros1[3][2].".<br />";

    echo '<br /><br />';

    for($linha = 0; $linha < 4; $linha++){
        echo "<p><b>Número da linha $linha</p></b>";
        echo "<ul>";
    for($coluna = 0; $coluna < 3; $coluna++){
        echo "<li>".$carros1[$linha][$coluna]."</li>";
        }    
        echo"</ul>";
    }
?>