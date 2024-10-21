<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Pedido</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <h2>Menú de Pedido</h2>

    <?php
    // Definir el menú con sus opciones, precios y stock
    $menu = array(
        "Hamburguesa" => array("precio" => 2250,    "stock" => rand(5, 20)),
        "Pizza" => array("precio" => 2000,          "stock" => rand(5, 20)),
        "Ensalada" => array("precio" => 1450,       "stock" => rand(5, 20)),
        "Pasta" => array("precio" => 2700,          "stock" => rand(5, 20)),
        "Sándwich" => array("precio" => 1050,       "stock" => rand(5, 20))
    );

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica el formulario cuando se envía
        $pedidos = $_POST["pedido"];
        $cantidades = $_POST["cantidad"];

        // Validar la existencia de las opciones seleccionadas
        if (!empty($pedidos) && is_array($pedidos)) {
            echo "<h3>Resumen del Pedido:</h3>";

            $totalGeneral = 0;

            // Iterar sobre las selecciones y mostrar el resumen
            for ($i = 0; $i < count($pedidos); $i++) {
                $pedido = $pedidos[$i];
                $cantidad = $cantidades[$i];

                // Validar la existencia de la opción seleccionada
                if (array_key_exists($pedido, $menu) && $cantidad <= $menu[$pedido]["stock"]) {
                    $precio_por_unidad = $menu[$pedido]["precio"];
                    $total = $precio_por_unidad * $cantidad;

                    // Mostrar el resumen del pedido
                    echo "<p>Producto: $pedido</p>";
                    echo "<p>Cantidad: $cantidad</p>";
                    echo "<p>Precio Por Unidad: $$precio_por_unidad</p>";
                    echo "<p>Precio Total: $$total</p>";
                    echo "<hr>";

                    // Actualizar el stock
                    $menu[$pedido]["stock"] -= $cantidad;

                    // Sumar al total general
                    $totalGeneral += $total;
                } else {
                    echo "<p style='color: red;'>¡Opción no válida o stock insuficiente para el producto $pedido!</p>";
                }
            }

            // Mostrar el total general
            echo "<h3>Total General: $$totalGeneral</h3>";
        } else {
            echo "<p style='color: red;'>¡Debes seleccionar al menos un producto!</p>";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="pedidoForm">

        <input type="button" value="Agregar Producto" onclick="agregarProducto()">
        <input type="submit" value="Calcular Total">

        <label for="pedido">Selecciona un producto:</label>
        <select name="pedido[]" class="producto" multiple>
            <?php
            // Mostrar las opciones del menú en el formulario
            foreach ($menu as $producto => $detalles) {
                echo "<option value='$producto'>$producto - $$detalles[precio] (Stock: $detalles[stock])</option>";
            }
            ?>
        </select>

        <br>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad[]" class="cantidad" min="1" value="1">

        <br><br>

    </form>

    <h2>Contacto</h2>
    <form action="enviar.php" method="post">
        <label for="email">Correo Electrónico:</label>
        <input type="email" placeholder="Email" name="email" required>
        <br>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" placeholder="Mensaje" required cols="50" row="5"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>

    <script>
        function agregarProducto();
    </script>

</body>
</html>
