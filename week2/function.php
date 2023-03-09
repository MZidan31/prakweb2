<?php
function kelulusan ($_nilai){
    //jika nilai rata rata nya dibawah 55 sama dengan tidak lulus
    //jika nilai rata rata nya diatas 55 sama dengan lulus
    if($_nilai < 55){
        return 'Tidak Lulus';
    }else{
        return 'Lulus';
    }
}
//1. buat fungsi grade kemudian kasih keterangan :
//jika nilai diatas 85 - 100 grade A
// jika nilai diatas 70 - 84 grade B
//jika nilai diatas 56 - 69 grade C
//jika nilai diatas 36 - 55 grade D
//jika nilai diatas 10 - 35 grade E
//jika tidak ada nilai maka cetak (anda tidak ada nilai)

function grade($_nilai){
    if ($_nilai >= 85){
        return "A";
    }elseif($_nilai >= 70){
        return "B";
    }elseif($_nilai >= 56){
        return "C";
    }elseif($_nilai >= 36){
        return "D";
    }elseif($_nilai >= 10){
        return "E";
    }else{
        return "I(Anda Tidak Ada Nilai)";
    }
}
?>