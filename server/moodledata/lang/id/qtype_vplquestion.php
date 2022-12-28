<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_vplquestion', language 'id', version '3.11'.
 *
 * @package     qtype_vplquestion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allornothing'] = 'Semua atau tidak sama sekali';
$string['answertemplate'] = 'Templat jawaban';
$string['answertemplate_help'] = 'Tulis di sini kode apa yang akan diisi di kotak jawaban untuk siswa.';
$string['cannotimportquestionvplnotfound'] = 'Peringatan impor: id modul VPL yang ditentukan dalam Pertanyaan VPL "{$a}" tidak valid.';
$string['cannotimportquestionvplunreachable'] = 'Peringatan impor: VPL yang ditentukan dalam Pertanyaan VPL "{$a}" tidak ada dalam kursus ini.';
$string['cfg:deletevplsubmissions'] = 'Hapus kiriman VPL';
$string['cfg:deletevplsubmissions_help'] = 'Apakah pengajuan Pertanyaan VPL yang dibuat pada VPL harus dibuang pada evaluasi pertanyaan.';
$string['cfg:generalsettings'] = 'Setelan Umum';
$string['choose'] = 'Pilih...';
$string['compilation'] = 'Kompilasi:';
$string['correction'] = 'Koreksi';
$string['evaluation'] = 'Evaluasi:';
$string['evaluationdetails'] = 'Detail evaluasi:';
$string['evaluationerror'] = 'Kesalahan evaluasi:';
$string['execerror'] = 'Kesalahan eksekusi:';
$string['execerrordetails'] = 'Operasi dibatalkan oleh VPL. Batas sumber eksekusi mungkin telah terlampaui.';
$string['execfiles'] = 'Berkas eksekusi';
$string['execfiles_help'] = 'Anda dapat mengedit berkas eksekusi di sini. Ini hanya dikirim selama evaluasi (dan Pra-periksa apakah berkas sama), dan tidak selama dijalankan (kecuali untuk berkas yang ditentukan sebagai "untuk disimpan saat dijalankan" di VPL).<br>
Untuk menambahkan berkas, tambahkan berkas tersebut di VPL sebagai berkas eksekusi.<br> Jika ada berkas yang tidak ingin Anda gunakan, tulis "UNUSED" pada baris pertama dan berkas tersebut akan dihilangkan.';
$string['execfilesevalsettings'] = 'Berkas eksekusi dan evaluasi setelan';
$string['execution'] = 'Kesalahan eksekusi:';
$string['gradingmethod'] = 'Penilaian';
$string['gradingmethod_help'] = 'Menentukan metode penilaian untuk pertanyaan ini. <ul><li>Jika "Semua atau tidak sama sekali" dipilih, siswa akan mendapatkan nilai 100% atau 0% untuk pertanyaan ini, tergantung apakah mereka mendapat nilai VPL sempurna atau tidak.</li> <li>Jika "Penskalaan" dipilih, nilai siswa untuk pertanyaan ini akan disesuaikan dengan nilai VPL mereka.</li></ul>';
$string['informationtext'] = 'Pertanyaan VPL';
$string['lastservermessage'] = 'Pesan server eksekusi terakhir diterima: {$a}';
$string['merge'] = 'Gabung';
$string['nogradeerror'] = 'Terjadi kesalahan selama penilaian pertanyaan (tidak ada nilai yang diperoleh). {$a}.';
$string['noprecheck'] = 'Tidak ada Pra-pemeriksaan';
$string['overwrite'] = 'Timpa';
$string['pleaseanswer'] = 'Tolong berikan jawaban.';
$string['pluginname'] = 'Pertanyaan VPL';
$string['pluginname_help'] = 'Pertanyaan VPL memungkinkan Anda membuat latihan pengkodean sederhana.<br> Ini bekerja dengan VPL, tetapi dirancang untuk menjadi jauh lebih sederhana di sisi siswa.';
$string['pluginnameadding'] = 'Menambahkan Pertanyaan VPL';
$string['run'] = 'Jalankan';
$string['templatevpl'] = 'Templat VPL';
$string['validateonsave'] = 'Validasi';
