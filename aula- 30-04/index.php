<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<?php 
 echo " <br>exemplo 1<br>";

 $var = array(2, 5, 7, 9, 11);
 echo $var[0];
 echo "<br>";
 echo $var[1];
 echo "<br>";
 echo $var[2];
 echo "<br>";
 echo $var[3];
 echo "<br>";
 echo $var[4];
 echo "<br>";

 echo " <br>exemplo 2<br>";
 $var1 = array("antonio", "joão", "zeca",);
 echo $var1[0];
 echo "<br>";
 echo $var1[1];
 echo "<br>";
 echo $var1[2];
 echo "<br>";

 echo " <br>exemplo 3<br>";

 $var2 = array("windows", 10, 2024, "v1.2021");
 echo $var2[0];
 echo "<br>";
 echo $var2[1];
 echo "<br>";
 echo $var2[2];
 echo "<br>";
 echo $var2[3];
 echo "<br>";
 
 echo " <br>exemplo 4<br>";
 
 $var3 = array("Italo" => 30,"Hubert" => 20,"Luna" => 11);
 echo "o nome é italo e a idade é $var3[Italo]";
 echo "<br>";
 echo "o nome é hubert e a idade é $var3[Hubert]";
 echo "<br>";
 echo "o nome é luna e a idade é $var3[Luna]";
 echo "<br>";

 echo " <br>exemplo 5<br>";

 $num = array(2 => 7, 3 => 8, 9 => 5);
 echo $num[2];
 echo "<br>";
 echo $num[3];
 echo "<br>";
 echo $num[9];
 echo "<br>";

?>
</body>
</html>