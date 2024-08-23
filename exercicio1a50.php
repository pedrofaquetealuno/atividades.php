<?php
// números de 1 a 50
for ($i = 1; $i <= 50; $i++) {
    // calcula a raiz quadrada
    $raizQuadrada = sqrt($i);
    
    // a raiz quadrada
    echo "A raiz quadrada de $i é " . number_format($raizQuadrada, 4) . "<br>";
}
?>