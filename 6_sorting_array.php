<?php
$angka = [3, 8, 1, 9, 5];
rsort($angka);
echo "Setelah diurutkan (desc): ";
foreach ($angka as $n) {
  echo "$n ";
}

echo "<br><br>";

$umur = ["Andi" => 21, "Budi" => 19, "Cici" => 23];
asort($umur); // sort by value
echo "Urut berdasarkan umur:<br>";
foreach ($umur as $nama => $u) {
  echo "$nama: $u<br>";
}
?>