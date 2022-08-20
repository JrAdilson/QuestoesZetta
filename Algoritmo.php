<?php 
    $a = fgets(STDIN); // ou define os valores manualmente, tanto em a, quanto em b
    $b = fgets(STDIN);
    $sum = $a+$b;
    $tot = $sum > 15 ? $sum+2 : $sum-6;
    echo $tot;
 ?>