<?php
//Array [index - associative-mixed array -serialized - multi dimension ]
//indexed array start with Zero
$names=["ali","ahmed","shimaa","mostafa","Medhat","Nesma","asmaa","nabila"];
//echo gettype($names);
/*echo $names[0];
echo $names[1];
echo $names[2];
echo $names[3];*/
/*$count=count($names);
for($i=0;$i<$count;$i++){
    echo $names[$i]."<br>"; 
}*/
//using Foreach [with array only]
foreach ($names as $name){
    echo $name."<br>";
}
/*Associative Array 
access arrow / object arrow[->] 
Fat Arrow [=>] associative array key=>value
*/
echo"<hr>";
$family=[
    "father"=>"khaled",
    "mother"=>"eman",
    "son"=>"ahmed"
];
echo $family["father"];
echo "<hr>";
//echo $family["father"];
foreach ($family as $role=>$person):
    echo $role.": ".$person."<br>";
endforeach;
$users=[
    "user1"=>"khaled",
    "group"=>["asmaa","user3"=>"shimaa","aliaa"]
    ];
var_dump($users);
echo $users["group"][1];
//Super Global Variables [8]

$_GET=["user"=>"ahmed","pass"=>"123456"];
