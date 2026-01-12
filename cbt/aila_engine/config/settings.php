<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Setting Identitas Aplikasi

$config['cbt_name'] 	= 'BKPSDM KOTA MANADO'; // Nama aplikasi

$config['address'] 	= 'Jl. Balai Kota No. 1,'; // Alamat

$config['village'] 	= 'Tikala Ares'; // Desa / kelurahan

$config['sub_district'] = 'Tikala'; // Kecamatan

$config['district'] = 'Manado'; // Kota / Kabupate
$config['province'] = 'Sulut'; // Propinsi



// Setting Penamaan

$config['school']	= 'BKPSDM'; // Sekolah, Bimbel, Kampus, Yayasan, Lembaga, Dst.
$config['teacher']	= 'Panitia'; // Guru, Dosen, Pengajar, Tutor, Instruktur, Dst.
$config['student']	= 'Pegawai'; // Siswa, Mahasiswa, Peserta, Pelajar, Dst.
$config['student_code']	= 'NIP'; // NIS, NIM, NIO, NIY, Kode Peserta, Dst.
$config['teacher_code']	= 'NIP'; // NIP, NIDN, Kode Pengajar, Dst.


// Setting limit login
// Ubah menjadi true untuk mengaktifkan pembatasan masuk hanya di satu perangkat
$config['limit_login']	= true;