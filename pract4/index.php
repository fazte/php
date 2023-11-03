<?php
include('classes/car.php');
include('lib/car.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        $car = new Car();
        $namespaceCar = new \lib\Car;
        ?>
    </div>
</body>

</html>