<?php
//declare variable
/*$user="Mai";//value+data type
//redeclare the same variable
$user=15;


echo "Hi, $user";
echo"<br>";
echo 'Hi, $user';
echo"<h1>Welcome</h1>";
echo'<h3>Welcome</h3>';

//declare Constant
define('FAV_CLUB','Alahly');
// No Acceptable to be redeclared

define('FAV_CLUB','zamalek');

echo FAV_CLUB;*/
//variable of variable
/*$object="person";
$person="ahmed";
$ahmed=25;
echo $$$object;*/

/*function play($player,$club){
    //function implementation
    return "$player is a king of $club";
}
//call function
echo play("ali","alahly");*/
/*function num1()
{
    echo 5;
}
function num2(){
    return 5;
}


echo "<hr>";
echo num2()*6;
echo num1()*6;
echo 5*6;*/
//built-in functions[any type]
//echo gettype();
//$name=5;
//echo gettype($name);
//settype
//settype($name,'string');
/*$name =(double) 5;// type casting
echo gettype($name);
define('FAV_CLUB','zamalek');
const FAV_PLAYER='Mosalah';*/
//flow control
$num=50;
/*if($num>50){
    echo "larger than 50";
}
elseif ($num==50){
    echo "equal to 50";
}
else{
    echo "less than 50";
}*/
//ternary operator
//echo ($num==50)?"yes":"no";
//alias if
/*if($num>79):
    echo "yes > 79";
elseif($num==79):
    echo "yes = 79";
else:
    echo "No";
endif;*/
/*switch ($num){
    case 70:
        echo " =70";
        break;
    case 80:
        echo " =80";
        break;
    default:
        echo "no";
}*/
/*$age=10;
//pre ++$i /post $++ increment 
for($i=0;$i<=$age;$i++){
    echo "hello $i"."<hr>";

}*/
//break;exit;continue;
/*for($i=0;$i<=10;$i++){
    if($i==5){
        //echo" i= $i"."<br>";
        continue;
    }
    echo "hello $i"."<hr>";
}
echo "ahmed";*/

//variable scoop [global - local - static]
/*$age=15;//global scoop
function hbd(){
    //$age=20;//local scoop
    //global $age;
    static $age=20; //static scoop
    echo "Happy Birth Day $age";
    $age++;
}
// after calling function [invoke function] function destroy function declaration
echo hbd();
echo "<hr>";
//cron Job
echo hbd();*/
// loosely typed
/*$x=10;
$y=7;
$z=(int)($x/$y);
echo $z;
//implicit casting [automatic]
//explicit settype (deprecated) / type casting (type)
echo gettype($z);*/
/*
$name="ahmed";
if(is_scalar($name)){
    echo gettype($name)." type";
}else{
    echo "Not ". gettype($name). " Type";
}*/
/*$age=23;
//to release variable from memory
unset($age);
if(isset($age)){
    echo "there is a value";
}else{
    echo "no value";
}*/
//variable reference
$a=5;
$b=&$a;
$a=11;
$a=55;
echo $b;