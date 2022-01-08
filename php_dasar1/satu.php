<?php
$data="72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
$data=explode(" ",$data);
echo "<pre>";
print_r($data);
echo "</pre>";

echo  '---------------- Rata -rata ----------------';
echo  '<br>';

echo $rata= array_sum ($data) / count($data);
echo  '<br>';
echo  '---------------- Rata -rata ----------------';
echo  '<br>';



echo  '---------------- 7 nilai terttingi ----------------';
echo  '<br>';


arsort($data);
$tertinggi='';
$i=1;
foreach($data as $r){
    if($i <= 7){
        $tertinggi.=$r.' ';
    }
    $i++;
}
echo  $tertinggi;
echo  '<br>';
echo  '---------------- 7 nilai terttingi ----------------';
echo  '<br>';
asort($data);
$terendah='';
$i=1;
foreach($data as $r){
    if($i <= 7){
        $terendah.=$r.' ';
    }
    $i++;
}
echo  $terendah;

