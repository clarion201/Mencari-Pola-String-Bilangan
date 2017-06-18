<?php
$Nilai = "222131333232222322211113113113331113111123132212121213211212221332223";

	echo "Nilai Pertama<br /> ".$Nilai."<br /><br />";

	echo "Pola Tiga Digit Angka yang Muncul dengan Duplikat<br />";
        for ($x = 0; $x < (strlen($Nilai)- 2); $x++) {
            $Pola[$x] = substr($Nilai, $x, 3);		
			echo $Pola[$x]."&nbsp" ;
		}
		echo "<br />";
		$values = array_count_values($Pola);
		$keys = array_keys($values);
			
		echo "Jumlah Pola Keseluruhan = ".count($Pola)."<br /><br />";
		echo "Pola Tiga Digit Angka yang Muncul tanpa Duplikat<br />";
		for ($x = 0; $x < count($values); $x++) {
		 echo $keys[$x]."&nbsp" ;
		}
		
		echo "<br />";
		echo "Jumlah Pola tanpa Duplikat = ".count($values)."<br /><br />";
		
		echo "Jumlah Masing-Masing Pola <br />";
		for ($x = 0; $x < count($values); $x++) {
		echo"Pola "; print($keys[$x]); echo"&nbsp Memilki Jumlah : "; print($values["$keys[$x]"]);echo"<br />";
		}
?>
