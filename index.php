<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
<?php

$people = array("Kristián Klimek",
                 "Matěj Dalekorej",
                 "Matěj Kneifl",
                 "Jan Pilař",
);
foreach ($people as $index => $value) {
  // code...
  echo ($index+1) . ".místo:" . $value . "<br>";
}

$PC ['CPU:'] = "Intel Core i9";
$PC ['GPU:'] = "nVidia GeForce 2080Ti";
$PC ['MB:'] = "MSI Z600";
$PC ['RAM:'] = "2x 16GB DDR4 Kingston 2400MHz";
?>
<?php foreach ($PC as $index => $value):
echo ($index) . $value . "<br>";
  ?>

<?php endforeach; ?>
</body>

</html>
