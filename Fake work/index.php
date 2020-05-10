<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$Hero1 = "Vx ";
$Hero1 .= "App";
echo $Hero1;
print "<h2>Kolapo is here at year</h2> ";
$x = 2000;
$x ++ ;
$y = 20;
$boolval = True;
$sum = $x + $y;
echo $sum;
$color = "blue";
echo " My Favourite color is $color <br>";
//$3 strings 1char 2float 1boolean 2int 1concatinate 2 strings
$text = 'Fill here to get money ';
$digit = 3012946119;
$money = 500000;
echo "My account balance is <strong>$digit</strong> and account number is <strong>$money</strong><br>";
print "my money $money is gotten by hardworking and i give young blood<br>";
$YourAge = rand(5,200);
$YourAge /=5;
// we use the /= because its faster instead of writing $YourAge = $YourAge/5
if ($YourAge<=12)
 {
echo "Wait Till You Are 13+";
echo "<br>";
}

elseif ($YourAge<=20) {
    echo "You are eligible";
    echo "<br>";
}
else{
      echo "You are not eligible(over aged)";
      echo "<br>";
    }

$name = array ("kolapo", "sandra", "tosin","ola", "tunde", "kola", "bola", "paul");
for ($i = 0; $i<count ($name); $i++){
    echo $name[$i] ;
    echo "<br>";
}
$boy = rand(6,20);
while( $boy <= 8 )
{
    echo "boy";
    echo "<br>";
    $boy++;
}


?>

<input type="text" value="<?php echo $text; ?>">

    
</body>
</html>