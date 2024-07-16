<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../aula- 07-05/style.css">
</head>
<body>
<pre>
<?php
 function nome_funcao($par_1 = 5, $par_2 = "vazio") {
 echo "Código da Função <br>";
 return "Dado de Retorno: ".$par_1."/".$par_2;
 }
 $retorno = nome_funcao();
 echo $retorno."<br><br>";
 $retorno = nome_funcao(200, "Vinicius");
 echo $retorno."<br><br>";


 function multiplica($x){
    $y = $x * 10;
    return $y;
 }
 $retorno = multiplica(100);
 echo $retorno;
 echo "<br><br>";
 
 function numero($n){
    for ($i=0; $i < $n; $i++) { 
      echo "<script> alert('digite x') </script>";
    }
  }

  $retorno = numero(5);
  echo $retorno;

?> 
</pre>
</body>
</html>