
<?php

    include 'cook/Cookie.php';

    $cookie = new Cook\Cookie();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>cookie</title>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="catalog">
                <h1>Печеньки:</h1>
                <div class="box">
                    
                <button class="btn"><i class="animation"></i><?php 
                $cookie->setType('Chocolate');
                    echo $cookie->getType();?><i class="animation"></i></button>
                <button class="btn"><i class="animation"></i><?php
                    $cookie->setType('Peanut Butter');
                    echo $cookie->getType();?><i class="animation"></i></button>
                <button class="btn"><i class="animation"></i><?php
                    $cookie->setType('Coffee');
                    echo $cookie->getType();?><i class="animation"></i></button>

                </div>
            </div>
        </div>
    </div>
</body>
</html>