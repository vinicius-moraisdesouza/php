<?php
 $var = "Bill Gates";
 $tipo = gettype($var);
 echo "$var ($tipo) <br>";
 $var = 12;
 $tipo = gettype($var);
 echo "$var ($tipo) <br>";
 $var = 3.1415;
 $tipo = gettype($var);
 echo "$var ($tipo) <br>";
 $var = true;
 $tipo = gettype($var);
 echo "$var ($tipo)<br>";

 echo "verificando armazenamento";


 if(is_null($var)) {
    echo "variavel \$var é nula/vazia!<br>";
 }
 $var= "Bill Gates";
 if(is_string($var)) {
    echo "variavel \$var é uma string!<br>";
 }
 $var = 12;
 if(is_integer($var)) {
    echo "variavel \$var é um inteiro!<br>";
 }
 $var = false;
 if(is_bool($var)) {
    echo "variavel \$var é booleana!<br>";
 }

 $var = array(1, 2, 3, 4);
 echo  "[for]:";
 for($a=0; $a<count($var); $a++) {
    echo "$var[$a]";
 }
echo"<br>[foreach]: ";
foreach($var as $dado) {
    echo "$dado";
}
?> 


