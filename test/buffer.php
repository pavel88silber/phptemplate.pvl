<?php

$year = 2021;
// Buffer ON  =============================================!
ob_start(); 

echo "Hello world! $year";
echo '<br>';
// $out1 = ob_get_contents();
echo 'Все летит в буффер (кроме Headers!)';
echo '<br>';

$out1 = ob_get_contents();

// ob_clean();

// $out1 = 'ob_get_contents()';

// // Выплевывает из буффера
// ob_flush();
// // 
// ob_end_flush();

// Clean buffer and close it
ob_end_clean();

ob_start();
echo "Sasha";
echo " and ";
echo "Masha";
$out3 = ob_get_contents();
ob_end_clean();


echo 'NO buffer';
echo '<br>';

// $out2 = ob_get_contents();


echo 'First ECHO';
echo '<br>';
echo 'From buffer here below';
echo '<br>';
echo '<hr>';
echo $out1;
echo $out2;
echo '<br>';
echo $out3;
echo '<hr>';

// ob_end_flush();
?>