<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $users = [
        [
            "name" => "Иван",
            "age" => 25,
            "city" => "Йошкар-Ола"
        ],
        [
            "name" => "Анна",
            "age" => 30,
            "city" => "Санкт-Петербург"
        ],
        [
            "name" => "Антон",
            "age" => 21,
            "city" => "Казань"
        ],
        [
            "name" => "Мария",
            "age" => 28,
            "city" => "Новосибирск"
        ]
    ];

    echo "<ul>";

    foreach ($users as $user) {
        echo "<li>";
        echo "Имя: " . $user["name"] . ", ";
        echo "Возраст: " . $user["age"] . ", ";
        echo "Город: " . $user["city"];
        echo "</li>";
    }

    echo "</ul>";

    ?>
</body>
</html>