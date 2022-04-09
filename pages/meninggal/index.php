<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data meninggal</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>
<?php include('../dasbor/data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>No</th>
      <th>NIK</th>
      <th>Nama Pendududuk Meninggal</th>
      <th>L/P</th>
      <!-- <th>Lahir</th> -->
      <th>Usia</th>
      <th>Pendidikan</th>
      <th>Pekerjaan</th>
      <th>Kawin</th>
      <th>Status</th>
      <th>Tanggal Meninggal</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?>
    <?php foreach ($data_meninggal as $meninggal) : ?>
    <tr>
      <td><?php echo $nomor++ ?>.</td>
      <td><?php echo $meninggal['nik_meninggal'] ?></td>
      <td><?php echo $meninggal['nama_meninggal'] ?></td>
      <td><?php echo $meninggal['jenis_kelamin_meninggal'] ?></td>
      <!-- <td>
        <?php echo ($meninggal['tanggal_lahir_meninggal'] != '0000-00-00') ? date('d-m-Y', strtotime($meninggal['tanggal_lahir_meninggal'])) : ''?>
      </td> -->
      <td><?php echo $meninggal['usia_meninggal'] ?></td>
      <td><?php echo $meninggal['pendidikan_terakhir_meninggal'] ?></td>
      <td><?php echo $meninggal['pekerjaan_meninggal'] ?></td>
      <td><?php echo $meninggal['status_perkawinan_meninggal'] ?></td>
      <td><?php echo $meninggal['status_meninggal'] ?></td>
      <td><?php echo $meninggal['tgl_meninggal'] ?></td>
      <td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_meninggal=<?php echo $meninggal['id_meninggal'] ?>"><i class="glyphicon glyphicon-sunglasses"></i> Detail</a>
            </li>
            <li>
              <a href="cetak-show.php?id_meninggal=<?php echo $meninggal['id_meninggal'] ?>" target="_blank"><i class="glyphicon glyphicon-print"></i> Cetak</a>
            </li>
            <?php if ($_SESSION['user']['status_user'] != 'RW'): ?>
            <li class="divider"></li>
            <li>
              <a href="delete.php?id_meninggal=<?php echo $meninggal['id_meninggal'] ?>" onclick="return confirm('Yakin hapus data ini?')">
                <i class="glyphicon glyphicon-trash"></i> Hapus
              </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>
                 

<div class="well">
  <dl class="dl-horizontal">
    <dt>Penduduk Meninggal</dt>
    <dd><?php echo $jumlah_meninggal['total'] ?> orang</dd>

    <dt>Jumlah Laki-laki</dt>
    <dd><?php echo $jumlah_meninggal_l['total'] ?> orang</dd>

    <dt>Jumlah Perempuan</dt>
    <dd><?php echo $jumlah_meninggal_p['total'] ?> orang</dd>

    <dt>Warga < 17 tahun</dt>
    <dd><?php echo $jumlah_meninggal_kd_17['total'] ?> orang</dd>

    <dt>Warga >= 17 tahun</dt>
    <dd><?php echo $jumlah_meninggal_ld_17['total'] ?> orang</dd>
  </dl>
</div>



<?php include('../_partials/bottom.php') ?>
