<?php
$day = date ("D");
switch ($day) {
 case 'Sun' : $hari = "Minggu"; break; case 'Mon' : $hari = "Senin"; break; case 'Tue' : $hari = "Selasa"; break; case 'Wed' : $hari = "Rabu"; break; case 'Thu' : $hari = "Kamis"; break; case 'Fri' : $hari = "Jum'at"; break; case 'Sat' : $hari = "Sabtu"; break; default : $hari = "Kiamat";
}
echo "Sekarang hari <b>$hari</b>";
?>

<!-- Pada	program	di	atas,	variabel	$day	 (baris	ke-2)	akan	berisi	3	 (tiga)	digit	pertama	dari	
nama	hari	dalam	bahasa	Inggris.	Dengan	fungsi	date(),	kita	akan	memperoleh	informasi	
tanggal,	hari	dan	waktu	 sekarang.	Selanjutnya	isi	variabel	 $day	akan	diperiksa	dengan	
switch	(baris	ke-3),	jika	isinya	adalah	‘Sun’	maka	$hari	adalah	“Minggu”	dan	seterusnya. -->