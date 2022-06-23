<?php
$array = explode(',', $_GET['array']); //explode()はExcelの「区切り」みたいなもの

$count = count($array);
for ($i = 0; $i < $count; $i++) {
  for ($n = 1; $n < $count; $n++) {
    if($array[$n-1] > $array[$n]) {
      $temp = $array[$n]; //右隣の方が大きかったらその右の数字を$tempに逃がす
      $array[$n] = $array[$n-1]; //左側を右側に代入
      $array[$n-1] = $temp; //逃がしていた右側を左側に代入
    }
  }
}
print_r($array);
?>