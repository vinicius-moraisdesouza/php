<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> arrays - Laços</h1>

    <h2> Array: Definição Explicita(sem chave)</h2>
    <pre>
    <?php
        $var = array(1, 2, 3, 4);
        echo "impressao 1 por 1";
        echo "<br>";
        echo $var[0];
        echo "<br>";
        echo $var[1];
        echo "<br>";
        echo $var[2];
        echo "<br>";
        echo $var[3];
        echo "<br>";
     ?>
    </pre>

    <h2> impressao com [for]:</h2>;
    <?php
     for($a=0; $a<(count($var)); $a++) {
        echo "$var[$a]" . "<br>";
     }
    ?>

    
    <h2> impressao com [foreach]:</h2>;
    <pre>

      <?php
         foreach($var as $dado) {
          echo "$dado";
         }
      ?>
    </pre>
    <h2> echo ------- // array Definição Explicita</h2>;
     

<pre>
    <?php
        $var = array(
            "Maria" => 25,
            "joão" => 44,
            "José" => 12,
            "Neusa" => 73
        );
        foreach ( $var as $dados) {
            echo "$dados <br>";
        }
     ?>

     <h2> foreach com chave valor</h2>;
     <pre>
        <?php
            foreach ( $var as $chave => $valor) {
                echo "$chave: tem $valor anos <br>";
            }
       ?>
     </pre>
    
     <h2> print_r -> mostra o que tem armazenado no array</h2>;
     <pre>
        <?php
            print_r($var);
       ?>
     </pre>


</pre>
     <?php 
     echo " -------------// array multidimensional: Definição Explicita <br>";
     $alunos = array( "Maria" => 
                  array("endereco" => "rua chile",
                      "bairro" => "rebouças",

     ),
     );
   
     ?>

   

</body>
</html>