<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$rows = array_map('str_getcsv', file('fichero.csv'));
$header = array_shift($rows);
$csv=array(); //guardo todas las filas
foreach ($rows as $row) {
    $csv[$row[0]] = array_combine($header,$row);
}

if isset($csv[$id])
 {
    $csv[$id]=array($id,$nombre);
    //$csv[$id][1]=$nombre
}

//volver a guardar los datos en el fichero 

/*formulario id, nombre,
botones type submit
 de alta, de borrar,  
(new) (delete) (modify)
*/
var_dump($csv);