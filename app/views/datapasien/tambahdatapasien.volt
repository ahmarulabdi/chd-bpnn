<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="text text-center"><a href="{{url('datalatih')}}" class="btn btn-default pull-left">
        <i class="fa fa-arrow-left"></i>
    </a>  Tambah Data Latih </h3>
  </div>
  <div class="panel-body">
      <form class="" action="" method="post">
          <div class="col-md-4">
              <div class="row">
                      <div class="form-group col-md-6">
                          <label for="">Usia</label>
                          <input type="number" class="form-control" id="" placeholder="Usia">
                      </div>
                      <div class="form-group col-md-6">
                          <label for="">Jenis Kelamin</label>
                          <select class="form-control" name="JK">
                              <option value="L">Laki-laki</option>
                              <option value="K">Perempuan</option>
                          </select>
                      </div>
              </div>
              <div class="row">
                  <div class="form-group">
                      <label for="">Riwayat Keluarga</label>
                      <select class="form-control" name="Riwayat_keluarga">
                          <option value="Ada">Ada</option>
                          <option value="Tidak_ada">Tidak Ada</option>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input type="text" class="form-control" id="" placeholder="Pekerjaan">
                  </div>
                  <div class="form-group">
                    <label for="">Riwayat Jantung</label>
                    <select class="form-control" name="Riwayat_jantung">
                        <option value="Ada">Ada</option>
                        <option value="Tidak_ada">Tidak Ada</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Riwayat Diabetes Melitus</label>
                    <select class="form-control" name="R_dm">
                        <option value="Ada">Ada</option>
                        <option value="Tidak_ada">Tidak Ada</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Riwayat Hipertensi</label>
                    <select class="form-control" name="R_ht">
                        <option value="Ada">Ada</option>
                        <option value="Tidak_ada">Tidak Ada</option>
                    </select>
                  </div>
              </div>
          </div>
          <div class="col-md-4">

              <div class="form-group">
                <label for="">Riwayat Kolesterol</label>
                <select class="form-control" name="R_chol">
                    <option value="Ada">Ada</option>
                    <option value="Tidak_ada">Tidak Ada</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Obesitas</label>
                <select class="form-control" name="Obesitas">
                    <option value="Iya">Iya</option>
                    <option value="Tidak">Tidak</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Tekanan Darah Sistolik</label>
                <input type="number" class="form-control" id="" placeholder="Sistolik">
              </div>
              <div class="form-group">
                <label for="">Tekanan Darah Diastolik</label>
                <input type="number" class="form-control" id="" placeholder="Diastolik">
              </div>
              <div class="form-group">
                <label for="">Kadar LDL</label>
                <input type="number" class="form-control" id="" placeholder="Ldl">
              </div>
              <div class="form-group">
                <label for="">Kadar HDL</label>
                <input type="number" class="form-control" id="" placeholder="Hdl">
              </div>
          </div>
          <div class="col-md-4">


              <div class="form-group">
                <label for="">Kolesterol</label>
                <input type="number" class="form-control" id="" placeholder="Chol">
              </div>
              <div class="form-group">
                <label for="">Trigliserida</label>
                <input type="number" class="form-control" id="" placeholder="Trig">
              </div>
              <div class="form-group">
                <label for="">Glukosa</label>
                <input type="number" class="form-control" id="" placeholder="Glu">
              </div>
              <div class="form-group">
                <label for="">Elevasi Segmen T</label>
                <select class="form-control" name="Elevasi_st">
                    <option value="Ada">Ada</option>
                    <option value="Tidak_ada">tidak Ada</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Enzim Jantung</label>
                <select class="form-control" name="R_dm">
                    <option value="Normal">Ada</option>
                    <option value="Tidak_normal">Tidak Normal</option>
                    <option value="Meningkat">Meningkat</option>
                </select>
              </div>
              <div class="form-group">
                <label for="">Kasus</label>
                <input type="text" class="form-control" id="" placeholder="Kasus">
              </div>
          </div>
          <div class="btn-group btn-group-md">
              <button type="submit" class="btn btn-success">
                Tambahkan
              </button>
              <a href="{{url('datalatih')}}" class="btn btn-danger" >
                Batal
            </a>
              <button type="reset" class="btn btn-default">
                Reset
              </button>
          </div>
      </form>

  </div>
  <div class="panel-footer">

  </div>
</div>
