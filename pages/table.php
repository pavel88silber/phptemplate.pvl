<h1>Table</h1>;
<?php
    $rows = 10;
    $cols = 10;

    echo "<table border='1'>";
    for($tr=1; $tr<$rows; $tr++){
        echo "<tr>";
        for($td=1; $td<$cols; $td++){
            if($td == 1 or $tr == 1){
                echo "<th style='background:".$color."'>".$tr*$td."</th>";
            } else
            echo "<td>".$tr*$td."</td>";
        }
        echo "</tr>";     
    }
    echo "</table>";


    $title = 'Table';
    
?>