<?php
$text = "Hello World";
echo "Panjang string: " . strlen($text) . "<br>";
echo "Jumlah kata: " . str_word_count($text) . "<br>";
echo "Kebalikan string: " . strrev($text) . "<br>";
echo "Posisi 'World': " . strpos($text, "World") . "<br>";
echo "Ganti teks: " . str_replace("World", "PHP", $text) . "<br><br>";

echo "Nilai mutlak dari -9: " . abs(-9) . "<br>";
echo "Akar kuadrat dari 64: " . sqrt(64) . "<br>";
echo "Pembulatan 4.6: " . round(4.6) . "<br>";
echo "Angka acak (1–100): " . rand(1, 100) . "<br>";
?>