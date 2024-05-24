<?php 
$koneksi = mysqli_connect("localhost","root","","db_tamu");


if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into data_tamu set
    NAMA = '$_POST[NAMA]',
    INSTANSI= '$_POST[INSTANSI]',
    ALAMAT = '$_POST[ALAMAT]',
    TUJUAN= '$_POST[TUJUAN]',
    WA = '$_POST[WA]',
    DATE = '$_POST[DATE]',
    CVC = '$_POST[CVC]'");

    echo "data pengunjung tersimpan";
}

// $no=1;
// $ambildata = mysqli_query($koneksi,"select * from data_tamu");
// while ($tampil = mysqli_fetch_array($ambildata)){
// 	echo "
// 	<tr>
// 		<td>$no</td>
// 		<td>$tampil[NAMA]</td>
// 		<td>$tampil[INSTANSI]</td>
// 		<td>$tampil[ALAMAT]</td>
//         <td>$tampil[TUJUAN]</td>
// 		<td>$tampil[WA]</td>
// 		<td>$tampil[DATE]</td>
// 		<td>$tampil[CVC]</td>
// 	</tr>
// 	";

// $no++;
// }									
