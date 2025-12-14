<!DOCTYPE html>
<html>
<body>
    <h2>Калькулятор</h2>
    
    <form action="" method="post">
        <input type="number" name="num1" required>
        <select name="operation" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Вычислить</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        if ($operation === 'add') {
            $result = $num1 + $num2;
            echo "$num1 + $num2 = $result";
        } 
        elseif ($operation === 'subtract') {
            $result = $num1 - $num2;
            echo "$num1 - $num2 = $result";
        } 
        elseif ($operation === 'multiply') {
            $result = $num1 * $num2;
            echo "$num1 * $num2 = $result";
        } 
        elseif ($operation === 'divide') {
            if ($num2 == 0) {
                echo "Ошибка: деление на ноль!";
            } else {
                $result = $num1 / $num2;
                echo "$num1 / $num2 = $result";
            }
        }
    }
    ?>
</body>
</html>