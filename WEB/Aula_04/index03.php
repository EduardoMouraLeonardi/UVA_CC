<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['operacao'];

echo "Calculadora <br>";
switch($op) {
    case '+':
        $result = $num1 + $num2;
        echo "$num1 + $num2 = $result <br>";
        break;
    case '-':
        $result = $num1 - $num2;
        echo "$num1 - $num2 = $result <br>";
        break;
    case '*':
        $result = $num1 * $num2;
        echo "$num1 * $num2 = $result <br>";
        break;
    case '/':
        if($num2 != 0) {
            $result = $num1 / $num2;
            echo "$num1 / $num2 = $result <br>";
        } else {
            echo "Divisão por zero não é permitida! <br>";
        }
        break;
    default:
        echo "Operação inválida! <br>";
}

?>