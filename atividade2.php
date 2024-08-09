<?php

$salario=1800;
$horasextras= 14;
//informar o salario e as horas extras
echo " o salario do funcionario é 1800, más ele fez 14 horas extras <br/>";
//contas do salario
if ($horasextras>=10 and $salario <=2000){
    $salario=($salario)+($salario*0.2);
}
else{
    $salario=$salario;
} 
//inforamar o salario
echo "o salario com bonús aplicado é de $salario"
?>
