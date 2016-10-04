
<?php

/* 
Некоторые сайты проводят розыгрыши призов среди своих подпсичиков. Предположим у нас
есть id 1000 пользователей (вам нужно сгенерировать их самостоятельно). Призов
разыгрывается только 50. Выберите этих 50 счастливчиков случайным образом (естественно,
один подарок - в одни руки).
*/

$AccArray = array();
$max      = 10000;
$min      = 0;
$count    = 1000;
$i        = 0;
while ($i < $count) {
    $random = rand($min, $max);
    if (!in_array($random, $AccArray)) { 
        $AccArray[$i] = $random;
        $i++;
    }
}

$WinArray = array();
$max      = 999;
$min      = 0;
$count    = 50;
$i        = 0;
while ($i < $count) {
    $random = rand($min, $max);
    if (!in_array($random, $WinArray)) {
        $WinArray[$i] = $random;
        $i++;
    }
}

$f     = 0;
$i     = 1; 
$count = 50;
while ($i < $count) {
    $n = $WinArray[$f];
    echo "$AccArray[$n]" . "/n";
    $i++;
    $f++;
}

?>
