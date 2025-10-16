<?php
function tambahValue($a) {
  $a += 10;
  return $a;
}

$nilai = 5;
echo "Sebelum: $nilai<br>";
echo "Sesudah (value): " . tambahValue($nilai) . "<br>";
echo "Nilai asli: $nilai<br><br>";

function tambahReference(&$b) {
  $b += 10;
  return $b;
}

$angka = 5;
echo "Sebelum: $angka<br>";
echo "Sesudah (reference): " . tambahReference($angka) . "<br>";
echo "Nilai asli setelah fungsi: $angka<br>";
?>