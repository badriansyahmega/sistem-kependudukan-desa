<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Meninggal</h1>
<?php include('_partials/menu.php') ?>

<?php include('../warga/data-show.php') ?>

<form action="store.php" method="post">
<h3>A. Data Pribadi</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">NIK</th>
    <td width="1%">:</td>
    <td><input type="text" class="form-control" name="nik_meninggal" value="<?php echo $data_warga[0]['nik_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Nama Warga</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="nama_meninggal" value="<?php echo $data_warga[0]['nama_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tempat Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tempat_lahir_meninggal" value="<?php echo $data_warga[0]['tempat_lahir_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Tanggal Lahir</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="tanggal_lahir_meninggal" value="<?php echo $data_warga[0]['tanggal_lahir_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Jenis Kelamin</th>
    <td>:</td>
    <td>
      <select class="form-control" name="jenis_kelamin_meninggal" required readonly>
        <option value="<?php echo $data_warga[0]['jenis_kelamin_warga'] ?>" selected><?php echo $data_warga[0]['jenis_kelamin_warga'] ?></option>
      </select>
    </td>
  </tr>
</table>

<h3>B. Data Alamat</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Alamat KTP</th>
    <td width="1%">:</td>
    <td><textarea class="form-control" name="alamat_ktp_meninggal"><?php echo $data_warga[0]['alamat_ktp_warga'] ?></textarea></td>
  </tr>
  <tr>
    <th>Tempat Meninggal</th>
    <td>:</td>
    <td><textarea class="form-control" name="alamat_meninggal"><?php echo $data_warga[0]['alamat_warga'] ?></textarea></td>
  </tr>
  <tr>
    <th>Desa/Kelurahan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="desa_kelurahan_meninggal" value="<?php echo $data_warga[0]['desa_kelurahan_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Kecamatan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kecamatan_meninggal" value="<?php echo $data_warga[0]['kecamatan_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Kabupaten/Kota</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="kabupaten_kota_meninggal" value="<?php echo $data_warga[0]['kabupaten_kota_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Provinsi</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="provinsi_meninggal" value="<?php echo $data_warga[0]['provinsi_warga'] ?>"></td>
  </tr>
  <tr>
    <th>Negara</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="negara_meninggal" value="<?php echo $data_warga[0]['negara_warga'] ?>"></td>
  </tr>
  <tr>
    <th>RT</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rt_meninggal" value="<?php echo $data_warga[0]['rt_warga'] ?>"></td>
  </tr>
  <tr>
    <th>RW</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="rw_meninggal" value="<?php echo $data_warga[0]['rw_warga'] ?>"></td>
  </tr>
</table>

<h3>C. Data Lain-lain</h3>
<table class="table table-striped table-middle">
  <tr>
    <th width="20%">Agama</th>
    <td width="1%">:</td>
    <td>
      <select class="form-control" name="agama_meninggal" required readonly>
        <option value="<?php echo $data_warga[0]['agama_warga'] ?>" selected><?php echo $data_warga[0]['agama_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pendidikan Terakhir</th>
    <td>:</td>
    <td>
      <select class="form-control" name="pendidikan_terakhir_meninggal" required readonly>
        <option value="<?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?>" selected><?php echo $data_warga[0]['pendidikan_terakhir_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
    <th>Pekerjaan</th>
    <td>:</td>
    <td><input type="text" class="form-control" name="pekerjaan_meninggal" value="<?php echo $data_warga[0]['pekerjaan_warga'] ?>" readonly></td>
  </tr>
  <tr>
    <th>Status pernikahan</th>
    <td>:</td>
    <td>
      <select class="form-control" name="status_perkawinan_meninggal" required readonly>
        <option value="<?php echo $data_warga[0]['status_perkawinan_warga'] ?>" selected><?php echo $data_warga[0]['status_perkawinan_warga'] ?></option>
      </select>
    </td>
  </tr>
  <tr>
  <tr>
    <th>Status</th>
    <td>:</td>
    <td>
      <select class="form-control" name="status_meninggal" required readonly>
        <option value="<?php echo $data_warga[0]['status_warga'] ?>" selected><?php echo $data_warga[0]['status_warga'] ?></option>
      </select>
    </td>
  </tr>
    <th>Tanggal Meninggal</th>
    <td>:</td>
    <td><input type="text" name="tgl_meninggal"></td>
  </tr>
   
</table>

<input type="hidden" name="id_warga" value="<?php echo $data_warga[0]['id_warga'] ?>">

<button type="submit" class="btn btn-primary btn-lg">
  <i class="glyphicon glyphicon-export"></i> meninggal
</button>
</form>

<?php include('../_partials/bottom.php') ?>
