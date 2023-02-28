<?php
$ns1 = ['id'=>1,'nim'=>"01101",'uts'=>80,'uas'=>90,'tugas'=>95];
$ns2 = ['id'=>1,'nim'=>"01102",'uts'=>75,'uas'=>90,'tugas'=>80];
$ns3 = ['id'=>1,'nim'=>"01103",'uts'=>85,'uas'=>95,'tugas'=>90];

//simpan variable data array asosiatif ke dalam array indexing
$ar_nilai = [$ns1, $ns2, $ns3];

?>
<!-- buat dengan elemen html -->
<center><h3>Daftar Nilai Mahasiswa</h3></center>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>TUGAS</th>
            <th>Nilai Akhir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($ar_nilai as $nilai){
            echo '<tr><td>'.$nomor. '</td>';
            echo '<td>'.$nilai['nim'].'</td>';
            echo '<td>'.$nilai['uts'].'</td>';
            echo '<td>'.$nilai['uas'].'</td>';
            echo '<td>'.$nilai['tugas'].'</td>';
            //hitung nilai akhir
            $finalvalue = ($nilai ['uts'] + $nilai['uas'] + $nilai['tugas'])/3;
            echo '<td>'.number_format($finalvalue,2,',',',').'</td>';
            echo '</tr>';
            $nomor++;
        }
        ?>
    </tbody>
</table>