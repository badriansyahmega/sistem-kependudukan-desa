<?php
include('../../config/koneksi.php');

// hitung warga
$query_warga = "SELECT COUNT(*) AS total FROM warga";
$hasil_warga = mysqli_query($db, $query_warga);
$jumlah_warga = mysqli_fetch_assoc($hasil_warga);

// hitung kartu keluarga
$query_kartu_keluarga = "SELECT COUNT(*) AS total FROM kartu_keluarga";
$hasil_kartu_keluarga = mysqli_query($db, $query_kartu_keluarga);
$jumlah_kartu_keluarga = mysqli_fetch_assoc($hasil_kartu_keluarga);

// hitung mutasi
$query_mutasi = "SELECT COUNT(*) AS total FROM mutasi";
$hasil_mutasi = mysqli_query($db, $query_mutasi);
$jumlah_mutasi = mysqli_fetch_assoc($hasil_mutasi);

// hitung meninggal
$query_meninggal = "SELECT COUNT(*) AS total FROM meninggal";
$hasil_meninggal = mysqli_query($db, $query_meninggal);
$jumlah_meninggal = mysqli_fetch_assoc($hasil_meninggal);

// hitung warga statsus tetap
$query_warga_tetap = "SELECT COUNT(*) AS total FROM warga WHERE status_warga = 'Tetap'";
$hasil_warga_tetap = mysqli_query($db, $query_warga_tetap);
$jumlah_warga_tetap = mysqli_fetch_assoc($hasil_warga_tetap);

// hitung warga statsus Kontrak
$query_warga_kontrak = "SELECT COUNT(*) AS total FROM warga WHERE status_warga = 'Kontrak'";
$hasil_warga_kontrak = mysqli_query($db, $query_warga_kontrak);
$jumlah_warga_kontrak = mysqli_fetch_assoc($hasil_warga_kontrak);


// hitung warga statsus pernikahan 
$query_warga_kontrak = "SELECT COUNT(*) AS total FROM warga WHERE status_warga = 'Kontrak'";
$hasil_warga_kontrak = mysqli_query($db, $query_warga_kontrak);
$jumlah_warga_kontrak = mysqli_fetch_assoc($hasil_warga_kontrak);


// hitung islam
$query_warga_islam = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Islam'";
$hasil_warga_islam = mysqli_query($db, $query_warga_islam);
$jumlah_warga_islam = mysqli_fetch_assoc($hasil_warga_islam);

// hitung Kristen
$query_warga_Kristen = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Kristen'";
$hasil_warga_Kristen = mysqli_query($db, $query_warga_Kristen);
$jumlah_warga_Kristen = mysqli_fetch_assoc($hasil_warga_Kristen);

// hitung Budha
$query_warga_Budha = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Budha'";
$hasil_warga_Budha = mysqli_query($db, $query_warga_Budha);
$jumlah_warga_Budha = mysqli_fetch_assoc($hasil_warga_Budha);

// hitung Katholik
$query_warga_Katholik = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Katholik'";
$hasil_warga_Katholik = mysqli_query($db, $query_warga_Katholik);
$jumlah_warga_Katholik = mysqli_fetch_assoc($hasil_warga_Katholik);

// hitung Hindu
$query_warga_Hindu = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Hindu'";
$hasil_warga_Hindu = mysqli_query($db, $query_warga_Hindu);
$jumlah_warga_Hindu = mysqli_fetch_assoc($hasil_warga_Hindu);



// hitung Konghucu
$query_warga_Konghucu = "SELECT COUNT(*) AS total FROM warga WHERE agama_warga = 'Konghucu'";
$hasil_warga_Konghucu = mysqli_query($db, $query_warga_Konghucu);
$jumlah_warga_Konghucu = mysqli_fetch_assoc($hasil_warga_Konghucu);


// hitung warga laki-laki
$query_warga_l = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'L'";
$hasil_warga_l = mysqli_query($db, $query_warga_l);
$jumlah_warga_l = mysqli_fetch_assoc($hasil_warga_l);

// hitung warga laki-laki
$query_warga_p = "SELECT COUNT(*) AS total FROM warga WHERE jenis_kelamin_warga = 'P'";
$hasil_warga_p = mysqli_query($db, $query_warga_p);
$jumlah_warga_p = mysqli_fetch_assoc($hasil_warga_p);

// hitung warga lebih dari 17 tahun
$query_warga_ld_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) >= 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_ld_17 = mysqli_query($db, $query_warga_ld_17);
$jumlah_warga_ld_17 = mysqli_fetch_assoc($hasil_warga_ld_17);

// hitung warga kurang dari 17 tahun
$query_warga_kd_17 = "SELECT COUNT(*) AS total FROM warga WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_warga, CURDATE()) < 17 AND tanggal_lahir_warga != '0000-00-00'";
$hasil_warga_kd_17 = mysqli_query($db, $query_warga_kd_17);
$jumlah_warga_kd_17 = mysqli_fetch_assoc($hasil_warga_kd_17);

// hitung mutasi laki-laki
$query_mutasi_l = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'L'";
$hasil_mutasi_l = mysqli_query($db, $query_mutasi_l);
$jumlah_mutasi_l = mysqli_fetch_assoc($hasil_mutasi_l);

// hitung mutasi perempuan
$query_mutasi_p = "SELECT COUNT(*) AS total FROM mutasi WHERE jenis_kelamin_mutasi = 'P'";
$hasil_mutasi_p = mysqli_query($db, $query_mutasi_p);
$jumlah_mutasi_p = mysqli_fetch_assoc($hasil_mutasi_p);

// hitung mutasi lebih dari 17 tahun
$query_mutasi_ld_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) >= 17 AND tanggal_lahir_mutasi != '0000-00-00'";
$hasil_mutasi_ld_17 = mysqli_query($db, $query_mutasi_ld_17);
$jumlah_mutasi_ld_17 = mysqli_fetch_assoc($hasil_mutasi_ld_17);

// hitung mutasi kurang dari 17 tahun
$query_mutasi_kd_17 = "SELECT COUNT(*) AS total FROM mutasi WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_mutasi, CURDATE()) < 17 AND tanggal_lahir_mutasi != '0000-00-00'";
$hasil_mutasi_kd_17 = mysqli_query($db, $query_mutasi_kd_17);
$jumlah_mutasi_kd_17 = mysqli_fetch_assoc($hasil_mutasi_kd_17);

// hitung laki laki
$query_meninggal_l = "SELECT COUNT(*) AS total FROM meninggal WHERE jenis_kelamin_meninggal = 'L'";
$hasil_meninggal_l = mysqli_query($db, $query_meninggal_l);
$jumlah_meninggal_l = mysqli_fetch_assoc($hasil_meninggal_l);

// hitung meninggal perempuan
$query_meninggal_p = "SELECT COUNT(*) AS total FROM meninggal WHERE jenis_kelamin_meninggal = 'P'";
$hasil_meninggal_p = mysqli_query($db, $query_meninggal_p);
$jumlah_meninggal_p = mysqli_fetch_assoc($hasil_meninggal_p);

// hitung meninggal lebih dari 17 tahun
$query_meninggal_ld_17 = "SELECT COUNT(*) AS total FROM meninggal WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_meninggal, CURDATE()) >= 17 AND tanggal_lahir_meninggal != '0000-00-00'";
$hasil_meninggal_ld_17 = mysqli_query($db, $query_meninggal_ld_17);
$jumlah_meninggal_ld_17 = mysqli_fetch_assoc($hasil_meninggal_ld_17);

// hitung meninggal kurang dari 17 tahun
$query_meninggal_kd_17 = "SELECT COUNT(*) AS total FROM meninggal WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir_meninggal, CURDATE()) < 17 AND tanggal_lahir_meninggal != '0000-00-00'";
$hasil_meninggal_kd_17 = mysqli_query($db, $query_meninggal_kd_17);
$jumlah_meninggal_kd_17 = mysqli_fetch_assoc($hasil_meninggal_kd_17);
