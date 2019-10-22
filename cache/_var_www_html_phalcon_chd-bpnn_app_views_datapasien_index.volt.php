<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading"><h3 class="text text-center">Data Latih</h3></div>
      <div class="panel-body">
          <div class="form-group">
              <a class="btn btn-success" href="<?= $this->url->get('dataasien/tambahdatapasien') ?>">
                  <i class="glyphicon glyphicon-plus"></i>Tambah Data
              </a>
              <?php $validasi = 'check'; ?>
              <a class="btn btn-primary pull-right" href="<?= $this->url->get('datapasien/normalisasivalidasi/' . $validasi) ?>">
                  <i class="glyphicon glyphicon-arrow-right"></i> Cek Normalisasi
              </a>
          </div>
          <table class="table table-striped table-bordered table-hover">
              <thead>
              <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Usia</th>
                  <th>JK</th>
                  <th>Pekerjaan</th>
                  <th>Riwayat_keluarga</th>
                  <th>Aksi</th>

              </tr>
              </thead>
              <tbody>
              <?php foreach ($datapasiens as $datapasien) { ?>
                  <tr>
                      <td><?= $datapasien->no ?></td>
                      <td><?= $datapasien->nama ?></td>
                      <td><?= $datapasien->alamat ?></td>
                      <td><?= $datapasien->usia ?></td>
                      <td><?= $datapasien->jk ?></td>
                      <td><?= $datapasien->pekerjaan ?></td>
                      <td><?= $datapasien->riwayat_keluarga ?></td>
                      <td>
                          <a href="<?= $this->url->get('datapasien/datapasiendetail/' . $datapasien->no) ?>" class="btn btn-info">
                              Detail
                          </a>
                      </td>
                  </tr>
              <?php } ?>
              </tbody>
          </table>
      </div>

    </div>
  </div>
</div>
