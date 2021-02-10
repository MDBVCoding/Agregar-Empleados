<?php

$Nombre = $_POST["nombre"];

$Apellido = $_POST["apellido"];

$Cedula= $_POST["cedula"];

$Sueldo = $_POST["sueldo"];

$Departamento = $_POST["depa"];

$LugardeTrabajo = $_POST["lugar"];


$Empleado = array(
				array('Nombre' => $Nombre, 'Apellido' => $Apellido, 'Cedula' => $Cedula, 'Sueldo' => $Sueldo, 'Departamento' => $Departamento, 'Lugar de Trabajo' => $LugardeTrabajo)
			);

echo '<table border="0"" class="table">';
foreach ( $Empleado as $r ) {
        echo '<tr>';
        foreach ( $r as $v ) {

			echo '<td>'.$v.'</td>';
        }
        echo '</tr>';
}
echo '</table>';