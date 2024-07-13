<?php

//init
$diatas_ekspektasi = 2;
$sesuai_ekspektasi = 1;
$dibawah_ekspektasi = 0;

function toText(int $val){
  if($val == 0) return "Di bawah ekspektasi";
  if($val == 1) return "Sesuai ekspektasi";
  if($val == 2) return "Di atas ekspektasi";
}

//workspace
$perilaku = $diatas_ekspektasi;
$hasil_kerja = $sesuai_ekspektasi;


//process
$result = array (
  array("Sangat Kurang", "Kurang/Misconduct", "Kurang/Misconduct"),
  array("Butuh Perbaikan", "Baik", "Baik"),
  array("Butuh Perbaikan", "Baik", "Sangat Baik")
);

//print
echo "Perilaku: " . toText($perilaku);
?><br><?php
echo "Hasil Kerja: " . toText($hasil_kerja);
?><br><?php
echo "Output predikat kinerja: " . $result[$perilaku][$hasil_kerja];

?>