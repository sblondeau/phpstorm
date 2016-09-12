<?php
echo '<h1>MES ELEVES</h1>';
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
$sum_age = 0;
foreach ($students as $student=>$age) {
    echo $student.' '.$age.'<br/>';
    $sum_age+=$age;
}
echo 'moyenne élèves : ' . $sum_age/count($students);

?>