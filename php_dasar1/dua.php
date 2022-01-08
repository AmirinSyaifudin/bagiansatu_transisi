<?php

echo  '------ huruf kecil ------';
echo  '<br>';
function count_lowercase($mixed_case) {
    $upper_case = strtoupper($mixed_case);
    $similar = similar_text($mixed_case, $upper_case);
    return strlen($mixed_case)-$similar;
}

echo count_lowercase('TranSISI');