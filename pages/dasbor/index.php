<?php include('../_partials/top.php') ?>
<h1 class="page-header">Halaman Detail Penduduk Desa Jepatlor</h1>

<?php include('data-index.php') ?>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Warga</h3>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item"> Total Penduduk = <?php echo $jumlah_warga['total'] ?> </li>
          <li class="list-group-item"> Penduduk Tetap = <?php echo $jumlah_warga_tetap['total'] ?> </li>
          <li class="list-group-item"> Penduduk Kontrak = <?php echo $jumlah_warga_kontrak['total'] ?> </li>
          <li class="list-group-item"> Laki Laki = <?php echo $jumlah_warga_l['total'] ?></li>
          <li class="list-group-item"> Perempuan = <?php echo $jumlah_warga_p['total'] ?> </li>
          <li class="list-group-item"> Punya KTP = <?php echo $jumlah_warga_ld_17['total'] ?> </li>
          <li class="list-group-item"> Belum Punya KTP = <?php echo $jumlah_warga_kd_17['total'] ?> </li>
          <div class="panel-footer">
            <a href="../warga" class="btn btn-primary" role="button">
              <span class="glyphicon glyphicon-book"></span> Detail »
            </a>
          </div>
          <h3>Data Agama Penduduk</h3>
          <ol class="list-group list-group-numbered">
            <li class="list-group-item"> Islam= <?php echo $jumlah_warga_islam['total'] ?> </li>
            <li class="list-group-item"> Kristen = <?php echo $jumlah_warga_Kristen['total'] ?> </li>
            <li class="list-group-item"> Katholik = <?php echo $jumlah_warga_Katholik['total'] ?> </li>
            <li class="list-group-item"> Hindhu = <?php echo $jumlah_warga_Hindu['total'] ?></li>
            <li class="list-group-item"> Budha = <?php echo $jumlah_warga_Budha['total'] ?> </li>
            <li class="list-group-item"> Konghucu= <?php echo $jumlah_warga_Konghucu['total'] ?> </li>
          </ol>
      </div>

    </div>
  </div>

  <div class="col-sm-6 col-md-4">
    <div class="panel panel-primary">
      <div class="panel-body">
        <h3>Data Kartu Keluarga </h3>
        <ol class="list-group list-group-numbered">
          <li class="list-group-item">Data Kartu Keluarga = <?php echo $jumlah_kartu_keluarga['total'] ?></li>
        </ol>
      </div>
      <div class="panel-footer">
        <a href="../kartu-keluarga" class="btn btn-primary" role="button">
          <span class="glyphicon glyphicon-inbox"></span> Detail »
        </a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="panel panel-primary">
        <div class="panel-body">
          <h3>Data Penduduk Meninggal</h3>
          <ol class="list-group list-group-numbered">
            <li class="list-group-item"> Total Penduduk = <?php echo $jumlah_meninggal['total'] ?> </li>
            <li class="list-group-item"> Laki Laki = <?php echo $jumlah_meninggal_l['total'] ?></li>
            <li class="list-group-item"> Perempuan = <?php echo $jumlah_meninggal_p['total'] ?> </li>
            <li class="list-group-item"> Punya KTP = <?php echo $jumlah_meninggal_ld_17['total'] ?> </li>
            <li class="list-group-item"> Belum Punya KTP = <?php echo $jumlah_meninggal_kd_17['total'] ?> </li>
            <div class="panel-footer">
              <a href="../meninggal" class="btn btn-primary" role="button">
                <span class="glyphicon glyphicon-book"></span> Detail »
              </a>
            </div>
            <h3>Data Penduduk Pindah</h3>
            <ol class="list-group list-group-numbered">
              <li class="list-group-item"> Jumlah Data =<?php echo $jumlah_mutasi['total'] ?> </li>
              <li class="list-group-item"> Laki Laki = <?php echo $jumlah_mutasi_l['total'] ?> </li>
              <li class="list-group-item"> Perempuan = <?php echo $jumlah_mutasi_p['total'] ?> </li>
              <li class="list-group-item"> Punya KTP = <?php echo $jumlah_mutasi_ld_17['total'] ?> </li>
              <li class="list-group-item"> Belum Punya KTP = <?php echo $jumlah_mutasi_kd_17['total'] ?> </li>
            </ol>
            <div class="panel-footer">
              <a href="../mutasi" class="btn btn-primary" role="button">
                <span class="glyphicon glyphicon-export"></span> Detail »
              </a>
            </div>
          </ol>
        </div>

      </div>
    </div>

  </div>
</div>

<?php include('../_partials/bottom.php') ?>