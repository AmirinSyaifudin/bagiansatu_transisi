<?php

$table='<tr>';
for($n = 1; $n <= 64; $n++) {
    $tr='';
    if ( $bagi = $n  % 8 == 0 ) {
        $tr='</tr><tr>';
    }

    if (! $n % 2 == 0){
        $color='bgcolor="#fff"';
    }else{
        $color='bgcolor="#000"';
    }

    $table.='
            
                <td '. $color.' >'.$n.'</td>
                '.$tr.'
            
        ';


}
$table.='</tr>';
?>

<table border="1" width="400px">
    <?=  $table ?>
</table>
