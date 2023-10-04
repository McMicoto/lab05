<?php
    if (isset($_POST['calcular'])) {
        $precio_actual = floatval($_POST['precio_actual']);
        $cantidad_unidades = intval($_POST['cantidad_unidades']);
        
        $descuento_precio = 0.05 * $precio_actual;
        $descuento_especial = 0.07 * ($precio_actual - $descuento_precio);
        $precio_nuevo = $precio_actual - $descuento_precio;
        $importe_compra = $precio_nuevo * $cantidad_unidades;
        $obsequio_caramelos = 2 * $cantidad_unidades;

        echo "<h2>Resultados:</h2>";
        echo "<p>Nuevo precio de la gaseosa: S/. " . number_format($precio_nuevo, 2) . "</p>";
        echo "<p>Importe de la compra: S/. " . number_format($importe_compra, 2) . "</p>";
        echo "<p>Importe del descuento: S/. " . number_format($descuento_precio + $descuento_especial, 2) . "</p>";
        echo "<p>Importe a pagar: S/. " . number_format($importe_compra - ($descuento_precio + $descuento_especial), 2) . "</p>";
        echo "<p>Obsequio de caramelos: " . $obsequio_caramelos . " caramelos</p>";
    }
    ?>