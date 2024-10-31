<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombreMenu'])) {
    $total = 0;

    foreach ($_POST['nombreMenu'] as $item) {
        list($nombre, $precio) = explode('|', $item);
        $total += (float) $precio;
    }

    echo "El total de su pedido es: $" . $total;
} else {
    echo "Por favor, seleccione al menos un plato.";
}
?>











