<?php
    echo "<h1 style='color:green'> Success Payment </h1>";
    foreach($_GET as $campo => $valor){
        echo "</br>" . "- ". $campo ." = ". $valor;
      }
?>
