<?php
$num = $_POST['num'];

echo "Tabuada do $num <br>";
   for($i = 1; $i <= 10; $i++) {
        $mult = $num * $i;
        echo "$num x $i = $mult <br>";
   }

?>