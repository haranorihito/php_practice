<?php
//課題1
$name = "norihito";
if($name == "norihito"){
    echo "私はあなたの名前です";
}
    else{
        echo "あなたの名前ではありません";
    }

//課題2
$totle = 0;
for($i = 1; $i <= 10000; $i++){
    $totle += $i;
}
echo $totle;

//課題3
$fruits = ["peach","nashi","meron","mango","grape"];
foreach($fruits as $fr)
    echo $fr;

//課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
