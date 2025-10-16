<?php
date_default_timezone_set("Asia/Jakarta");

echo "Tanggal hari ini: " . date("Y-m-d") . "<br>";
echo "Hari: " . date("l") . "<br>";
echo "Waktu sekarang: " . date("H:i:s") . "<br><br>";

$besok = strtotime("tomorrow");
echo "Tanggal besok: " . date("Y-m-d", $besok) . "<br>";

$tigaBulanLagi = strtotime("+3 months");
echo "Tiga bulan lagi: " . date("Y-m-d", $tigaBulanLagi) . "<br>";
?>