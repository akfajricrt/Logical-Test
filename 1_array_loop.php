<!--  berikut  perulangan while untuk menampilkan semua data pada array ke web browser -->

<?php

$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';

$data = 0;
while ($data < count($aplikasi)) {
  echo $aplikasi[$data]."<br>";
  $data++;
}









