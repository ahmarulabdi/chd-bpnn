<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="text text-center"><a href="{{url('datapasien')}}" class="btn btn-default pull-left">
        <i class="fa fa-arrow-left"></i>
    </a>  Detail Data Latih No : <span>{{row_datapasien.no}}</span><br></h3>
  </div>
  <div class="panel-body">
      <div class="alert alert-success">

          <label for="">Usia</label>
          <span>{{row_datapasien.usia}}</span><br>
          <label for="">Jk</label>
          <span>{{row_datapasien.jk}}</span><br>
          <label for="">Pekerjaan</label>
          <span>{{row_datapasien.pekerjaan}}</span><br>
          <label for="">Riwayat Keluarga</label>
          <span>{{row_datapasien.riwayat_keluarga}}</span><br>
          <label for="">Riwayat Jantung</label>
          <span>{{row_datapasien.riwayat_jantung}}</span><br>
      </div>
      <ul class="list-unstyled list-group">
          <div class="col-md-6">
              <li class="list-group-item"><label for="">R Dm</label> :{{row_datapasien.r_dm}}</li>
              <li class="list-group-item"><label for="">R Ht</label> :{{row_datapasien.r_ht}}</li>
              <li class="list-group-item"><label for="">R Chol</label> :{{row_datapasien.r_chol}}</li>
              <li class="list-group-item"><label for="">Obesitas</label> :{{row_datapasien.obesitas}}</li>
              <li class="list-group-item"><label for="">Sistolik</label> :{{row_datapasien.sistolik}}</li>
              <li class="list-group-item"><label for="">Diastolik</label> :{{row_datapasien.diastolik}}</li>
              <li class="list-group-item"><label for="">Ldl</label> :{{row_datapasien.ldl}}</li>
          </div>
          <div class="col-md-6">
              <li class="list-group-item"><label for="">Hdl</label> :{{row_datapasien.hdl}}</li>
              <li class="list-group-item"><label for="">Chol</label> :{{row_datapasien.chol}}</li>
              <li class="list-group-item"><label for="">Trig</label> :{{row_datapasien.trig}}</li>
              <li class="list-group-item"><label for="">Glu</label> :{{row_datapasien.glu}}</li>
              <li class="list-group-item"><label for="">Elevasi St</label> :{{row_datapasien.elevasi_st}}</li>
              <li class="list-group-item"><label for="">Enzim Jantung</label> :{{row_datapasien.enzim_jantung}}</li>
              <li class="list-group-item"><label for="">Kasus</label> :{{row_datapasien.kasus}}</li>
          </div>
      </ul>
  </div>
  <div class="panel-footer">

  </div>
</div>
