<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
   <h2>array: definição implicita</h2>
   <pre>
   <?php
     $aluno = array ("Mario", "Marcela ", "Marcos","Marina","Marta","Mario","Mercia","Monica");
     for ($a=0; $a<count($aluno); $a++) {
        echo "<br>";
        echo $aluno[$a];
     };
     ?>
   </pre>
   
   <h2>array: definição explicita</h2>
   <pre>
     <?php
     $aluno2 = array ("Pedro", "Karine", "Marcos","Sofia","Meire","Almidio","Nicolly","Rauanny");
     for ($a=0; $a<count($aluno2); $a++) {
       echo "<br>";
       echo "$aluno2[$a]";
     }
     echo "<br>[foreach]: ";
     foreach ($aluno2 as $dado) {
       echo "$dado";
     }
     
     ?>

    </pre>

    <h2>array: definição explicita</h2>
     <pre>
     <?php
     $alunos = array("Pedro", "Luis Eduardo", "Adriel", "Natan", "Eduardo", "Leonardo", "Vinicius", "Italo", "Livia");
    
     echo "exemplo com for <br>";
     for ($a=0; $a<count($alunos); $a++) {
       echo "<br>";
       echo "o indice é $a o nome do aluno é $alunos[$a]<br>";
     }
     $alunos = ["hubert" => 3, "Adriel" => 7, "Luiz" => 6, "Ryan" => 3.99, "leo" => 4.01, "luna" => 11, "italo" => -6];
      foreach ($alunos as $chave => $valor){
        echo "<br>";
        echo "os dados sao: $valor <br>";
        if ($valor >= 10){
          echo "<br>";
            echo "alunos aprovados";
            echo "<br>";
            echo "obteve a nota: $valor <br>";
            echo "<br>";
        } else if( $valor<8 && $valor>=4){
          echo "<br>";
          echo "alunos em recuperação";
          echo "<br>";
          echo "o aluno: $chave <br>";
          echo "<br>";
          echo "obteve a nota: $valor <br>";
          echo "<br>";
        } else {
           echo "<br>";
            echo "alunos reprovados";
            echo "<br>";
            echo "o aluno: $chave <br>";
            echo "<br>";
            echo "obteve a nota: $valor <br>";
            echo "<br>";
        } 

     } 
    
     ?>
     </pre>
</body>
</html>