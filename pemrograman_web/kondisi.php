<?php
//skrip dan latihan modul 3 (struktur kondisi)
//1a.Gunakan if .. else .. else if 
$bil1 = 6;
$bil2 = 9;
$bil3 = 10;

if ($bil1 > $bil2)
{
    $max = $bil1;
}
else
{
    $max = $bil2;
}
if ($max > $bil3)
{
    $maxSemua = $max;
}
else
{
    $maxSemua = $bil3;
}
echo "Nilai terbesar dari ketiga bilangan adalah ".$maxSemua;
echo "<br>";

//1b.Gunakan switch .. case
$angkaBln = date("n");
switch($angkaBln)
{
    case 1 : $namaBln = "Januari";
            break;
    case 2 : $namaBln = "Februari";
            break;
    case 3 : $namaBln = "Maret";
            break;
    case 4 : $namaBln = "April";
            break;
    case 5 : $namaBln = "Mei";
            break;
    case 6 : $namaBln = "Juni";
            break;
    case 7 : $namaBln = "Juli";
            break;
    case 8 : $namaBln = "Agustus";
            break;
    case 9 : $namaBln = "September";
            break;
    case 10 : $namaBln = "Oktober";
            break;
    case 11 : $namaBln = "November";
            break;
    case 12 : $namaBln = "Desember";
            break;   
}
echo "Nama bulan sekarang adalah : ".$namaBln;
echo "<br>";

//2a. menentukan angka ganjil if else
$angka1 = 10;
$angka2 = 5;
if ($angka1 % 2 == 0){
    echo "Angka $angka1 adalah bilangan genap";
    echo "<br>";
}
else{
    echo "Angka $angka1 adalah bilangan ganjil";
    echo "<br>";
}

//operator ternary
$angka3 = 13;
echo ($angka3 %2 == 0) ? "Genap" : "Ganjil";
echo "<br>";

//2b. menggunakan switch case
$angka4 = 7;
switch ($angka4 % 2){
    case 0:
        echo "Angka $angka4 adalah bilangan genap";
        echo "<br>";
        break;
    case 1:
        echo "Angka $angka4 adalah bilangan ganjil";
        echo "<br>";
        break;
    default:
        "Angka tidak valid";
}

?>