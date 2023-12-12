<!--<form action="--><?php //$_SERVER['PHP_SELF']?><!--" method="POST">-->
<!--    <input type="text" name="name" placeholder="name">-->
<!--    <input type="submit" name="Send">-->
<!--</form>-->
<?php
//var_dump($_POST);
//string functions [https://www.php.net/manual/en/book.strings.php]
//form validation 
/*function validate($data){
    $data=strip_tags($data);
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}
function is_required($data){
    if(empty($data)){
        echo"no it is rquired";
    }else{
        return validate($data);
    }
}
echo is_required($_POST['name']);*/
//$text="mosalah.mp3.mp4";
//$arr=explode(".",$text);
//$name1="Ahmed";
//$name2="Shimaa";
//$arr1=[$name1,$name2];
//$arr2=compact("name1","name2");
//var_dump($arr1);
//var_dump($arr2);
////array functions [https://www.php.net/manual/en/ref.array.php]
$names=['medhat','asmaa','khaled','ashraf'];
var_dump($names);
//array_pop($names);
array_shift($names);
//array_push($names,"shimaa");
array_unshift($names,"hamada");
var_dump($names);
//control internal pointer in array
/*reset($names);
next($names);
next($names);
next($names);
prev($names);
reset($names);
end($names);
echo current($names);*/
//sort reorder array values ASC [only for indexed array]
//sort($names);
//rsort reorder array values DSC [only for indexed array]
/*rsort($names);
var_dump($names);
$family=[
        "father"=>"ahmed",
        "mother"=>"nahla",
        "son2"=>"ashraf",
        "son1"=>"khaled"
];*/
//asort reorder array values ASC [only for Associative array]
//asort($family);
//arsort reorder array values DSC [only for Associative array]
//arsort($family);
//ksort reorder array keys ASC [only for Associative array]
//ksort($family);
//krsort reorder array keys DSC [only for Associative array]
//krsort($family);
//var_dump($family);
//$text=implode("<br>",$names);
//echo $text;
/*
$names[]="ahmed";
$names[]="qahmed";
$names[]="wwwww";*/
/*$names["son1"]="mohammed";
$names["son2"]="ahmed";
$names=["son1"=>"mohammed","son2"=>"ahmed"];
var_dump($names);*/
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <lable>Skills</lable><br>
    <label>PHP</label><input type="checkbox" name="skills[php]" value="php">
    <label>HTML</label><input type="checkbox" name="skills[html]" value="html">
    <label>CSS</label><input type="checkbox" name="skills[css]" value="css">
    <label>Javascript</label><input type="checkbox" name="skills[js]" value="javascript">
    <input type="submit" name="send">
</form>
<?php
var_dump($_POST);
$mySkills=$_POST['skills'];
foreach ($mySkills as $mySkill){
    static $i=1;
    echo $i."- ".$mySkill."<br>";
    $i++;
}

