<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evidencia 2</title>
</head>
<body>
    
    <?php
#Aprendiz: Jorge Quintero Suárez
#Pograma de formación: Desarrollo web con PHP
#Evidencia:TALLER "USO DE ARREGLOS"

    //se elabora un array multidemensional
    $arraydirectory = array (
      "name" => array ("Santiago Lopez", "Mariana Estupiñan", "Daniela Loaiza",),
      "direction" => array ("Cra. 54 #87a - 45", "Cll. 24 #46r - 24 sur", "Cra 15 #72 a - 34",),
      "telphone" => array ("3026546987", "3021546987", "306845791",),
      "birthday" => array ("09/05/1982", "02/04/1996","24/01/1974",),
      "color" => array ("Amarillo", "Rojo", "Azul",),
      "meaning" => array ("Prosperidad", "Pasion", "No se encuentra el significado",),
    );

    $name = $arraydirectory['name'];
    $direction = $arraydirectory['direction'];
    $telphone = $arraydirectory['telphone'];
    $birthday = $arraydirectory['birthday'];
    $color = $arraydirectory['color'];
    $meaning = $arraydirectory['meaning'];

    //se imprime el encabezado de una tabla que contendra los datos del array multidimensional antes elaborado
echo "<table border=1><tr>
<caption>Directorio</caption>
    <th>Nombre</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Fecha</th>
    <th>Color</th>
    <th>Significado</th>";
    //se utiliza el ciclo "for" para iterar la lectura de los datos del array elaborado y ubicarlos dentro de la celda correspondiente en la tabla elaborada
for ($i=0; $i<count($name); $i++) {
echo "<tr> 
    <td>$name[$i]</td>
    <td>$direction[$i]</td>
    <td>$telphone[$i]</td>
    <td>$birthday[$i]</td>
    <td>$color[$i]</td>
    <td>$meaning[$i]</td>
    </tr>";

}

?>
</body>
</html>