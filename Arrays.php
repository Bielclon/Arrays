<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 1 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

foreach ($myArr as $key => $value) {
    echo "Dato $key: $value<br>";
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 2 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$i = 1;
foreach ($myArr as $key => $value) {
    echo "Dato " . $i . "º. " . $key . ": " . $value . "<br>";
    $i++;
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 3 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$i = 1;
foreach ($myArr as $key => $value) {
    echo "Dato " . $i . "º. " . $key . ": " . $value . "<br>";
    $i++;
}

$myArr["edad"] = 24;

echo "--------------------------------- <br>";

$i = 1;
foreach ($myArr as $key => $value) {
    echo "Dato " . $i . "º. " . $key . ": " . $value . "<br>";
    $i++;
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 4 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "nombre" => "Sara",
    "apellido" => "Martinez",
    "edad" => 23,
    "ciudad" => "Barcelona"
);

$i = 1;
foreach ($myArr as $key => $value) {
    echo "Dato " . $i . "º. " . $key . ": " . $value . "<br>";
    $i++;
}

unset($myArr["ciudad"]);

echo "--------------------------------- <br>";

var_dump($myArr);
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 5 -->
<?php
echo "--------------------------------- <br>";
$letters = array("a", "b", "c", "d", "e", "f");

$reversed = array_reverse($letters);

$i = 6;
foreach ($reversed as $x) {
    echo "Dato " . $i . "º. " . $x . "<br>";
    $i--;
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 6 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 0,
    "Aitor" => 4,
    "Pepe" => 1
);
arsort($myArr);

echo "Notas de los estudiantes:<br>";
foreach ($myArr as $student => $grade) {
    echo "$student: $grade<br>";
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 7 -->
<?php
echo "--------------------------------- <br>";
$media = 0;
$myArr = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 0,
    "Aitor" => 4,
    "Pepe" => 1
);
arsort($myArr);

echo "Media de las notas:";
foreach ($myArr as $student => $grade) {
    $media += $grade;
}
$media = $media / count($myArr);
$formatted_media = number_format($media, 2);
echo " $formatted_media <br>";

echo "Alumnos por encima de la media: <br> ";
foreach ($myArr as $student => $grade) {
    if ($grade > $formatted_media) {
        echo "$student <br>";
    }
}
?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<!-- Ejercicio 8 -->
<?php
echo "--------------------------------- <br>";
$myArr = array(
    "Miguel" => 5,
    "Luis" => 7,
    "Marta" => 10,
    "Isabel" => 0,
    "Aitor" => 4,
    "Pepe" => 1
);
arsort($myArr);

foreach ($myArr as $nombre => $numero) {
    echo "La nota mas alta es " . $numero . " y el mejor alumno es " . $nombre . ".<br>";
    break;
}
?>

</body>
</html>
