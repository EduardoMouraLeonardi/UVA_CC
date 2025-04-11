<?php
$num = $_POST['num'];

echo "Fatorial de $num <br>";
    $fat = 1;
    for($i = 1; $i <= $num; $i++) {
        $fat *= $i;
    }
    echo "$num! = $fat <br>";
    echo "Fatorial de $num é $fat <br>";
?>