<?php
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
  echo "Buah ke-$i: $buah[$i]<br>";
}

echo "<br>";

$umur = ["Andi" => 20, "Budi" => 22, "Cici" => 19];
foreach ($umur as $nama => $usia) {
  echo "$nama berusia $usia tahun.<br>";
}

echo "<br>";

$mobil = [
  ["Toyota", 20, 10],
  ["Honda", 15, 5],
  ["Suzuki", 10, 8]
];

for ($i = 0; $i < count($mobil); $i++) {
  echo $mobil[$i][0] . " — stok: " . $mobil[$i][1] . ", terjual: " . $mobil[$i][2] . "<br>";
}
?>