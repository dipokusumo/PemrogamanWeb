<?php
$nip = '100111';
$namaPegawai = 'M Dipo Alam Kusumo';

$gajiPokok = 2000000;
$bonus = 500000;
$tunjangan = 0.05 * $gajiPokok;
$pajak = 0.1 * $gajiPokok;

$gajiDibayarkan = $gajiPokok + $bonus + $tunjangan - $pajak;

echo "=============================\n";
echo "NIP = $nip\n";
echo "Nama Pegawai = $namaPegawai\n";
echo "=============================\n";
echo "Gaji Pokok = Rp. $gajiPokok\n";
echo "Bonus = Rp. $bonus\n";
echo "Tunjangan = Rp. $tunjangan\n";
echo "Pajak = Rp. $pajak\n";
echo "=============================\n";
echo "Gaji yang harus dibayarkan = Rp. $gajiDibayarkan\n";
?>
