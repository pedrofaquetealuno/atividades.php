<?php 
//informe o valor da compra
echo " a compra foi de 465";
//informe se o cliente tem o vip
$compra= 465;
$vip='Sim';
// calcúlo da compra
if($compra>=500 or $vip=='Sim'){
    echo " o desconto foi aplicado pelo fato do cliente ter vip <br/>";
}else{
    echo "desconto aplicado";

}
?>
