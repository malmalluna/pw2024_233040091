<?php 
// Menghitung total volume 2 kubus
// Sisi kubus a = 9, sisi kubus b = 4

/* $sisi_a = 9;
$sisi_b = 4;
$volume_a = $sisi_a * $sisi_a * $sisi_a;
$volume_b = $sisi_b * $sisi_b * $sisi_b;
$total = $volume_a + $volume_b;
echo "Total volume kubus A & B = $total"; */

function total_volume_dua_kubus($a, $b) {
    return $a * $a * $a + $b * $b * $b;
}

echo("Total = " . total_volume_dua_kubus(9, 4)) . "<br>";
echo("Total = " . total_volume_dua_kubus(10, 15)) . "<br>";

