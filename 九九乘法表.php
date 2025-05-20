<?php
    echo '<table>';
    for($i=1;$i<=9;$i++){
        echo '<tr>';
        for($j=1;$j<=$i;$j++){
            echo '<td>'.$j.'&times;'.$i.'='.$j*$i.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>
<style>
    td{
        border:1px solid
    }
</style>