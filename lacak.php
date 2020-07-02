<?php
function cari($nama){
	echo "\n\n\n\n\n";
	echo "MASUKAN NAMA PENDUDUK : ";
	$target = trim(fgets(STDIN));
	echo "\nLoading ";
	for ($i=0; $i <5 ; $i++) {
		echo ". ";
		sleep(1);
	}
	echo "\n\n\nNama\t\t\tAlamat\t\t\tNIK";
	echo "\n$target\t\tJalan Mendua 1\t5173964026183\n\n\n";
}

cari("asu");

?>
