<?php
    if (isset($_POST['calcular'])) {
        $importe_total_vendido = floatval($_POST['importe_total_vendido']);
        $cantidad_hijos = intval($_POST['cantidad_hijos']);
        $sueldo_basico = 600;
        $bonificacion_por_hijo = $cantidad_hijos * 50;
        $comision = 0.075 * $importe_total_vendido;
        $sueldo_bruto = $sueldo_basico + $comision + $bonificacion_por_hijo;
        $descuento = 0.11 * $sueldo_bruto;
        $sueldo_neto = $sueldo_bruto - $descuento;
        
        echo "Bonificación por hijos en edad escolar: S/. " . $bonificacion_por_hijo . "<br>";
        echo "Comisión: S/. " . $comision . "<br>";
        echo "Sueldo bruto: S/. " . $sueldo_bruto . "<br>";
        echo "Descuento: S/. " . $descuento . "<br>";
        echo "Sueldo neto: S/. " . $sueldo_neto . "<br>";
    }
    ?>