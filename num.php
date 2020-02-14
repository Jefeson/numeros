<?php
 $num1 = $_POST['num'];


 if($num1 == 0){
     echo"Numero NULO.";
 }
 elseif($num1 > 0){
    echo"Numero POSITIVO.";
}
else{
    echo"Numero NEGATIVO.";
}

?>