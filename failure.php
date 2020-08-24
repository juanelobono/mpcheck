<?php
    echo "<h1 style='color:red'> Failure Payment </h1>";
    foreach($_GET as $campo => $valor){
        echo "</br>" . "- ". $campo ." = ". $valor;
      }
?>
