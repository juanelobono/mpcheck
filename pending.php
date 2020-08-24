<?php
    echo "<h1 style='color:blue'> Pending Payment </h1>";
    foreach($_GET as $campo => $valor){
        echo "</br>" . "- ". $campo ." = ". $valor;
      }
?>
