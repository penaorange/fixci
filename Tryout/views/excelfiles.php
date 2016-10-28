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

$fr = 0;
$fc = 3;
$lr = 1;
$lc = 5;
$i = 3;
$j = 1;
$lrs = 0;
foreach ($mapel as $value) {
    foreach ($mapel[$j] as $mpl) {
        $worksheet1->write_string(0, $i, $mpl->nm_mapel, $header);  // Set Nama kolom
        $worksheet1->set_column(0, $i, 15); // Set lebar kolom
        $worksheet1->merge_cells($fr, $fc, $lrs, $lc);
        $col = $i;
        $worksheet1->write_string(1, $col,"Benar", $header);  // Set Nama kolom
        $worksheet1->set_column(1, $col, 15); // Set lebar kolom
        $col++;
        $worksheet1->write_string(1, $col,"Kosong", $header);  // Set Nama kolom
        $worksheet1->set_column(1, $col, 15); // Set lebar kolom
        $col++;
        $worksheet1->write_string(1, $col,"Salah", $header);  // Set Nama kolom
        $worksheet1->set_column(1, $col, 15); // Set lebar kolom
        
        
        $fc = $lc + 1;
        $lc = $fc + 2;
        $i = $i + 3;
    }
    $j++;
}
$tn = $i;
$worksheet1->write_string(0, $tn, 'Total Nilai', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Pilihan 1', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Prediksi', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Pilihan 2', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Prediksi', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Pilihan 3', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);
$fc++;
$tn++;
$worksheet1->write_string(0, $tn, 'Prediksi', $header);  // Set Nama kolom
$worksheet1->set_column(0, $tn, 20); // Set lebar kolom
$worksheet1->merge_cells($fr, $fc, $lr, $fc);


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
$total_nilai = $i;
$temp = 0;
foreach ($data as $key) {
    if ($id == 0) {
        $i++;
        $worksheet1->write_string($row, 0, $number, $content);
        $worksheet1->write_string($row, 1, $key->id_peserta, $content);
        $worksheet1->write_string($row, 2, $key->nm_peserta, $content);
        $worksheet1->write_string($row, $col_benar, $key->jmlh_benar, $content);
        $worksheet1->write_string($row, $col_kosong, $key->jmlh_kosong, $content);
        $worksheet1->write_string($row, $col_salah, $key->jmlh_salah, $content);
        $worksheet1->write_string($row, $total_nilai, $key->total, $content);
        $worksheet1->write_string($row, $i, $key->prodi1, $content);
        $i++;
        if ($key->total < $key->nilai_aman1) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $i++;
        $worksheet1->write_string($row, $i, $key->prodi2, $content);
        $i++;
        if ($key->total < $key->nilai_aman2) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $i++;
        $worksheet1->write_string($row, $i, $key->prodi3, $content);
        $i++;
        if ($key->total < $key->nilai_aman3) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $i = $total_nilai;
        $temp = $col_salah;
    } else if ($id == $key->id_peserta) {
        $worksheet1->write_string($row, $temp +=1, $key->jmlh_benar, $content);
        $worksheet1->write_string($row, $temp +=1, $key->jmlh_kosong, $content);
        $worksheet1->write_string($row, $temp +=1, $key->jmlh_salah, $content);
    } else if ($id != $key->id_peserta) {
        $row++;
        $number++;
        $i++;
        $worksheet1->write_string($row, 0, $number, $content);
        $worksheet1->write_string($row, 1, $key->id_peserta, $content);
        $worksheet1->write_string($row, 2, $key->nm_peserta, $content);
        $worksheet1->write_string($row, $col_benar, $key->jmlh_benar, $content);
        $worksheet1->write_string($row, $col_kosong, $key->jmlh_kosong, $content);
        $worksheet1->write_string($row, $col_salah, $key->jmlh_salah, $content);
        $worksheet1->write_string($row, $total_nilai, $key->total, $content);
        $worksheet1->write_string($row, $i, $key->prodi1, $content);
        $i++;
        if ($key->total < $key->nilai_aman1) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $i++;
        $worksheet1->write_string($row, $i, $key->prodi2, $content);
        $i++;
        if ($key->total < $key->nilai_aman2) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $i++;
        $worksheet1->write_string($row, $i, $key->prodi3, $content);
        $i++;
        if ($key->total < $key->nilai_aman3) {
            $worksheet1->write_string($row, $i, "Tidak Lulus", $content);
        } else {
            $worksheet1->write_string($row, $i, "Lulus", $content);
        }
        $temp = $col_salah;
    }

    $id = $key->id_peserta;
}

$workbook->close();

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 */


