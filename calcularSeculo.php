<?php
$anoDigitado = $_POST['ano'];
function retornaSeculo($ano)
{

    if ($ano <= 0)
        echo "Ano inválido, favor digitar um ano maior que 1";

    else if($ano <= 100)
        echo "O ano " .$ano. " pertence ao século 1";
 
    else if ($ano % 100 == 0)
        echo "O ano " .$ano. " pertence ao século ", $ano / 100;
    else
        echo "O ano " .$ano. " pertence ao século ", floor ($ano / 100) + 1;    
}
    $ano = $anoDigitado;
    retornaSeculo($ano);
 
