<?php
require_once("../../assets/lib/fpdf/fpdf.php");
require_once("../../config/koneksi.php");

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../../assets/img/pati.png', 20, 10);

        // Arial bold 15
        $this->SetFont('Times', 'B', 15);
        // Move to the right
        // $this->Cell(60);
        // Title
        $this->Cell(200, 8, 'PEMERINTAHAN KABUPATEN PATI', 0, 1, 'C');
        $this->Cell(200, 8, 'KECAMATAN TAYU', 0, 1, 'C');
        $this->Cell(200, 8, 'DESA JEPATLOR', 0, 1, 'C');
        $this->SetFont('Times', 'i', 10);
        $this->Cell(200, 8, 'Jl. Raden Patah Jepatlor Tayu Kodepos :59155 - Jawa tengah', 0, 1, 'C');

        $this->SetFont('Times', 'BU', 12);
        for ($i = 0; $i < 10; $i++) {
            $this->Cell(308, 0, '', 1, 1, 'C');
        }

        $this->Ln(1);

        $this->Cell(200, 8, 'SURAT KETERANGAN KEMATIAN', 0, 1, 'C');
        $this->Ln(2);

        $this->SetFont('Times', 'B', 9.5);
    }

    // Page footer
    function Footer()
    {
        //TTD Kepala Desa
        $this->SetY(-127);
        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
        $waktu[1] = date("d", time());
        $waktu[2] = date("m", time());
        $waktu[3] = date("Y", time());
        $tanggalini = "$waktu[1] " . $bulan[$waktu[2] - 1] . " $waktu[3]";
        $this->Cell(169, 10, 'Jepatlor, ' . $tanggalini, 0, 0, 'R');
        $this->SetY(-120);
        $this->Cell(166, 10, 'Kepala Desa Jeaptlor', 0, 0, 'R');
        $this->SetY(-85);
        $this->SetFont('Arial', 'UB', 11);
        $this->Cell(171, 10, 'HERRY PRASETYO, S.E.', 0, 0, 'R');

        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// ambil dari url
$get_id_meninggal = $_GET['id_meninggal'];
// ambil dari database
$query = "SELECT * FROM meninggal WHERE id_meninggal = $get_id_meninggal";
$hasil = mysqli_query($db, $query);
$data_meninggal = array();
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_meninggal[] = $row;
}


$pdf = new PDF('P', 'mm', [210, 330]);
$pdf->AliasNbPages();
$pdf->AddPage();

// set font
$pdf->SetFont('Times', '', 12);

// set penomoran
$nomor = 1;
$pdf->cell(45, 7, 'NIK', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, strtoupper($data_meninggal[0]['nik_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Nama', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['nama_meninggal']), 0, 50), 0, 1, 'L');

$pdf->cell(45, 7, 'Tempat Lahir', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, strtoupper($data_meninggal[0]['tempat_lahir_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Tanggal Lahir', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, ($data_meninggal[0]['tanggal_lahir_meninggal'] != '0000-00-00') ? date('d-m-Y', strtotime($data_meninggal[0]['tanggal_lahir_meninggal'])) : '', 0, 1, 'L');

$pdf->cell(45, 7, 'Jenis Kelamin', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['jenis_kelamin_meninggal']), 0, 1), 0, 1, 'L');

$pdf->cell(45, 7, 'Alamat KTP', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['alamat_ktp_meninggal']), 0, 100), 0, 1, 'L');

$pdf->cell(45, 7, 'Tempat Meninggal', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['alamat_meninggal']), 0, 100), 0, 1, 'L');

$pdf->cell(45, 7, 'Desa/Kelurahan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['desa_kelurahan_meninggal']), 0, 20), 0, 1, 'L');

$pdf->cell(45, 7, 'Kecamatan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['kecamatan_meninggal']), 0, 20), 0, 1, 'L');

$pdf->cell(45, 7, 'Kabupaten/Kota', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['kabupaten_kota_meninggal']), 0, 20), 0, 1, 'L');

$pdf->cell(45, 7, 'Provinsi', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['provinsi_meninggal']), 0, 20), 0, 1, 'L');

$pdf->cell(45, 7, 'Negara', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(80, 7, substr(strtoupper($data_meninggal[0]['negara_meninggal']), 0, 20), 0, 1, 'L');

$pdf->cell(45, 7, 'RT', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(7, 7, strtoupper($data_meninggal[0]['rt_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'RW', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(7, 7, strtoupper($data_meninggal[0]['rw_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Agama', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(20, 7, strtoupper($data_meninggal[0]['agama_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Pendidikan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(16, 7, strtoupper($data_meninggal[0]['pendidikan_terakhir_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Pekerjaan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(20, 7, strtoupper($data_meninggal[0]['pekerjaan_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Kawin/Tidak Kawin', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(26, 7, strtoupper($data_meninggal[0]['status_perkawinan_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Status Kependudukan', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(24, 7, strtoupper($data_meninggal[0]['status_meninggal']), 0, 1, 'L');

$pdf->cell(45, 7, 'Tanggal Meninggal', 0, 0, 'L');
$pdf->cell(2, 7, ':', 0, 0, 'L');
$pdf->cell(24, 7, strtoupper($data_meninggal[0]['tgl_meninggal']), 0, 1, 'L');

$pdf->Ln(10);

$pdf->Output();
