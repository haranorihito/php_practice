<?php
function sum($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum(100);

function print_number(){
    for($i = 0; $i < 100; $i++){
        echo $i;
    }
}

// 引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function times2($num){
    return $num * 2;
}
echo times2(5);

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumab($a,$b){
    return $a + $b;
}
echo sumab(1,3);

// $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for($i = 0; $i < count($arr); $i++){
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));

//次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr){
    $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 
 echo max_array(array(6, 2, 3, 10, 5));
 
 //次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。
 $str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く！</p>";
echo strip_tags($str) ."\n";

$fruits = ['apple', 'orange', 'melon'];
array_push($fruits, 'banana', 'pineapple');
print_r($fruits);

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array = array_merge($array1, $array2, $array3);
print_r($array);

//現在のタイムスタンプを取得
echo '現在のUnixタイムスタンプ：'.time();
echo '<br>';
//3日後のタイムスタンプを取得
$nweek = time() + (3 * 24 * 60 * 60);
echo '3日後のUnixタイムスタンプ：'.$nweek;

//指定した日時のタイムスタンプを取得
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;

$week = [
  '日', 
  '月', 
  '火', 
  '水', 
  '木', 
  '金', 
  '土', 
];
$date = date('w');
echo $week[$date] . '曜日';