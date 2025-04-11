<?php
   $num = $_POST['num'];

   echo "O seu numero é par ou impar? <br>";
   if($num < 0) {
      echo "$num é um numero negativo";
   } elseif($num == 0) {
      echo "$num é zero";
   } else {
      echo "$num é um numero positivo";
   }
   
?>