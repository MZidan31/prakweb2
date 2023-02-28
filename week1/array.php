<?php
// array indexing
$ar_buah = ['jambu','bernuk','jeruk'];
//mencetak salah satu indeks array
echo "<br/>$ar_buah[2]";

//cetak hitung jumlah data array
echo '<br/> jumlah buah : ' .count($ar_buah);

// tambahkan data array 
$ar_buah[] = "durian";

//hapus indeks pertama 
unset($ar_buah[1]);

//ubah indeks kedua menjadi buah manggis
$ar_buah[2] = "manggis";
//cetak seluruh data array
echo "<ol>";
foreach ($ar_buah as $buah){
    echo "<li>$buah</li>";  
}
echo "</ol>";

//array assosiatif
$buah = ["J"=>'jambu',"I"=>'bernuk',"D"=>'jeruk'];
?>