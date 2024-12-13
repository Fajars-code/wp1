<?php
$bil1 = "200";
$bil2 = "40";
$teks1 = "PHP";
$teks2 = "php";

$hasil = (($bil1 <> $bil2) and ($teks1 == $teks2));
echo "$bil1 <> $bil2 and $teks1 == $teks2 adalah $hasil <br>";

$hasil = ! ($teks1 == $teks2);
echo "!($teks1==$teks2) adalah $hasil";
