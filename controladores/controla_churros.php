<?php
$total_churros = $_POST["num_churros"];
$venta_total = $total_churros * 1500;
if ($total_churros<=0) {
    echo "valor no valido";
}
else {
    $venta_total = $total_churros * 1500;
    echo "La venta total fue de: ".$venta_total;
}
?>