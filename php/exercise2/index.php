<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 16;
    $num2 = 25;
    $sum = $num1 + $num2;
    echo "Число 1: $num1<br>";
    echo "Число 2: $num2<br>";
    echo "Сумма: $sum<br>";

    if ($sum % 2 == 0){
        echo "Сумма $sum является четной";
    } else {
        echo "Сумма $sum является нечетной";
    }
    
    ?>
</body>
</html>