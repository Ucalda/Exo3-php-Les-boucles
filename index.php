<html>
<head>
  <title>exo_php </title>
</head>
<body>
<?php
//EXO 1
$numero = 0;
while ($numero <= 10) {
  echo "$numero ";
  $numero++;
}
echo "<br>";

//EXO 2
$EXO2 = 6;
for ($EX2=0; $EX2 <=20; $EX2++) {
  echo $EXO2*$EX2;
  echo " ";
}
echo "<br>";

//EXO 3
$EXO3 = 9;
for ($EX3=100; $EX3 >=10; $EX3--) {
  echo $EXO3*$EX3;
  echo " ";
}
echo "<br>";

//EXO 4
for ($EX4=1; $EX4<=10; $EX4+=0.5*$EX4) {
  echo "$EX4 ";
}
echo "<br>";

//EXO 5
for ($EX5=1; $EX5<=15 ; $EX5++)
  if ($EX5==1) {
    echo "On y est presque ";
  }else{
    echo "$EX5 ";
  }
echo "<br>";
echo "<br>";

//EXO 6
for ($EX6=20; $EX6>=0 ; $EX6--)
  if ($EX6==20) {
    echo "c'est presque bon ";
  }else{
    echo "$EX6 ";
  }
echo "<br>";
echo "<br>";

 //EXO 7
 for ($EX7=1; $EX7<=100; $EX7++) {
   if ($EX7==15){
    echo "On tient le bon bout ";
  }else {
  echo "$EX7 ";
  }
 }
 echo "<br>";
 echo "<br>";

 //EXO 8
 for ($EXOMIL=200; $EXOMIL>=0; $EXOMIL--) {
   if ($EXOMIL==12) {
     echo "Enfin ! ! ! ! ";
   }
   else {
     echo "$EXOMIL ";

   }
 }
?>
</body>
</html>
