<?php
$nilai = 90;


if ($nilai >= 75) {
    echo "Status: LULUS";
} else {
    echo "Status: TIDAK LULUS";
}

echo "<br>";


if ($nilai <= 60) {
    echo 'Kategori: nilai cukup';
} elseif ($nilai <= 75) {
    echo 'Kategori: nilai baik';
} elseif ($nilai >= 85) {
    echo 'Kategori: nilai sangat baik';
} else {
    echo 'Kategori: nilai kurang';
}
?>