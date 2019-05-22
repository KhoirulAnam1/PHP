<?php
$tahun = date ("Y");
$kabisat = ($tahun%4 == 0) ? "KABISAT" : "BUKAN
KABISAT";
echo "Tahun <b>$tahun</b> $kabisat";
?>

<!-- Pada	program	di	atas,	fungsi	date()	dengan	parameter	“Y”	(baris	ke-2)	akan	menghasilkan	
4	 digit	 tahun	 sekarang.	 Pada	 baris	 ke-3	 akan	 diperiksa	 apakah	 isi	 variabel	 $tahun	 jika	
dimodulus	 dengan	 4	 akan menghasilkan	 nilai	 0.	 Jika	 TRUE	 maka	 $kabisat	 akan	 berisi	
“KABISAT”	dan	jika	FALSE	$kabisat	akan	berisi	“BUKAN	KABISAT”.. -->