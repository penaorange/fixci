<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=daftar_tryout" . date('dmY_His') . ".xls");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Pragma: public");

$workbook = new Workbook();
$worksheet1 = & $workbook->add_worksheet('Daftar Tryout');

$header = & $workbook->add_format();
$header->set_color('black'); // set warna huruf
$header->set_border_color('black'); // set warna border

$header->set_size(11); // Set ukuran font 

$header->set_align("center"); // set align rata tengah

$header->set_top(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_bottom(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_left(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_right(2); // set ketebalan border bagian atas cell 0 = border tidak tampil

$worksheet1->write_string(0, 0, 'No', $header);  // Set Nama kolom
$worksheet1->set_column(0, 0, 5); // Set lebar kolom
$worksheet1->merge_cells(0, 0, 1, 0);

$worksheet1->write_string(0, 1, 'No. Peserta', $header);  // Set Nama kolom
$worksheet1->set_column(0, 1, 20); // Set lebar kolom 
$worksheet1->merge_cells(0, 1, 1, 1);

$worksheet1->write_string(0, 2, 'Nama Peserta', $header);  // Set Nama kolom
$worksheet1->set_column(0, 2, 50); // Set lebar kolom
$worksheet1->merge_cells(0, 2, 1, 2);

$worksheet1->write_string(0, 3, 'TPA', $header);  // Set Nama kolom
$worksheet1->set_column(0, 3, 15); // Set lebar kolom
$worksheet1->merge_cells(0, 3, 1, 5);

$worksheet1->write_string(0, 6, 'TPA', $header);  // Set Nama kolom
$worksheet1->set_column(0, 3, 15); // Set lebar kolom
$worksheet1->merge_cells(0, 6, 1, 8);

//$worksheet1->write_string(0, 10, 'Total Nilai', $header);  // Set Nama kolom
//$worksheet1->set_column(0, 3, 20); // Set lebar kolom
//$worksheet1->merge_cells(0, 4, 1, 4);

$content = & $workbook->add_format();
$content->set_size(11);

$content->set_top(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_bottom(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_left(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_right(1); // set ketebalan border bagian atas cell 0 = border tidak tampil

$row = 2;

$number = 1;
$id = 0;
//variable statis
$col_benar = 3;
$col_kosong = 4;
$col_salah = 5;

$temp = 0;
foreach ($data as $key) {
    if ($id == 0 || $id != $key->id) {
        $worksheet1->write_string($row, 0, $number, $content);
        $worksheet1->write_string($row, 1, $key->id, $content);
        $worksheet1->write_string($row, 2, $key->nm_peserta, $content);
        $worksheet1->write_string($row, $col_benar, $key->jmlh_benar, $content);
        $worksheet1->write_string($row, $col_kosong, $key->jmlh_kosong, $content);
        $worksheet1->write_string($row, $col_salah, $key->jmlh_salah, $content);
        $temp = $col_salah;
    } else if ($id == $key->id) {
        $temp++;
        $worksheet1->write_string($row, $temp +=1, $key->jmlh_benar, $content);
       $temp++;
        $worksheet1->write_string($row, $temp +=2, $key->jmlh_kosong, $content);
       $temp++;
        $worksheet1->write_string($row, $temp +=3, $key->jmlh_salah, $content);
    }
    $id = $key->id;
}

$workbook->close();

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 */


