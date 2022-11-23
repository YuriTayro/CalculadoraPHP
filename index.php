<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        require_once 'calculadora.php';

        $calc = new Calculadora();
        $calc->add(9);
        $calc->sub(5);
        $calc->multiply(7);
        $calc->add(150);
        $calc->divide(3);
        $calc->multiply(7);
        $calc->sub(78);
        $calc->divide(8);
        $calc->multiply(2);
        $calc->divide(3);
        $calc->divide(5);
        $calc->divide(4);
        //$calc->clear();
        echo 'Total calc = ' . $calc->total();

   ?>
    </pre>
    
    
</body>
</html>