<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mywork2</title>
</head>
<body>
<?php
$myfamily = "boy";
switch($myfamily){
case "ayo":
    case "ola":
        case "kolade":
            case "kolapo":
                echo "you are family";
            break; 
            default:
            echo "Not a family ";
        break;
}
function mywork(){
    echo "VxApp";
}
echo "This was produced by "; mywork();
echo "<br>";
$word = "How to count number of words";
$string_word_count = str_word_count($word);
echo $string_word_count;
echo "<br>";
$A = 5; $B = 4; $C = 3; $D= 2; $F = 0;
$TLP = $B * rand(3,4) +  $A * rand(3,4) +  $B * rand(2,3) + $B * rand(2,3) + $D * rand(1,2) + $F * rand(1,2) + $C * rand(1,2) + $A * rand(1,2) + $B * rand(2,3);    
$TUP = rand(3,4) + rand(3,4) + rand(2,3) + rand(2,3) + rand(1,2) + rand(1,2) + rand(1,2) + rand(1,2) +  rand(2,3); 
$GP = $TLP / $TUP;
$CGPA = ($TLP + $TLP) / ($TUP + $TUP);
echo ("You have"  . $CGPA  );
if ($CGPA <= 1.9){
    echo " PASS";
}
elseif ($CGPA <= 2.49){
    echo " 3RD CLASS";
}
elseif ($CGPA <= 3.49){
    echo " 2ND CLASS LOWER DIVISION ";
}
elseif ($CGPA <=4.49) {
    echo " 2ND CLASS UPPER DIVISION";
}
else {
    echo " 1ST CLASS HONOURS";
}
echo "<br>";
$score = rand(0,110);
echo $score;
if ($score <=44){
echo("F");
echo("<br>");
}
elseif ($score <=49){
echo("D");
echo("<br>");
}
elseif($score <=59){
echo("C");
echo("<br>");
}
elseif($score <=69){
echo("B");
echo("<br>");
}
elseif($score <=100){
    echo("A");
    echo("<br>");
}

else {
    echo("You are a scam");
    echo("<br>");
}
for($k=1; $k<11; $k++){
    echo("No: $k <br />");  

    $roll = rand (0,110);
    echo("Roll is: ". $roll);
    echo("<br />");

    while( $roll < 20){
        echo($roll." is lesser than 20");
        echo("<br />");

        $roll++;
    }

    echo("<br />");  
}


?>
<h4 style = "text-align:left; color: blue; font-family:cursive"> <?php for ($no=0 ; $no <=12 ; $no ++ )
{
    echo ("2 x $no = ".$no * 2 ); 
    echo("<br>");
}
?></h4>    
<h4 style = "text-align:center; color: red; font-family:cursive"> <?php for ($no=0 ; $no <=12 ; $no ++ )
{
    echo ("3 x $no = ".$no * 3 );
    echo("<br>"); 
}
?></h4>   
<h4 style = "text-align:right; color: greenyellow; font-family:cursive"> <?php for ($no=0 ; $no <=12 ; $no ++ )
{
    echo ("4 x $no = ".$no * 4 );
    echo("<br>"); 
}
?></h4>    
<h4 style = "text-align:left; color: green; font-family:cursive"> <?php for ($no=0 ; $no <=12 ; $no ++ )
{
    // echo ($randNo = rand(0, 111));
    // echo("<br>"); 
    echo ("5 x $no = ".$no * 5 );
    echo("<br>"); 
}
echo "Which my " ; mywork(); echo " can be one" ;

?></h4>    


</body>
</html>
