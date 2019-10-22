<div class="panel panel-default">
  <div class="panel-heading">
      <h3 class="text text-center"><a href="{{url('datalatihnormalisasi')}}" class="btn btn-default pull-left">
        <i class="fa fa-arrow-left"></i>
    </a>  Detail Data Normalisasi No : <span>{{row_datanormalisasi.no}}</span><br></h3>
  </div>
  <div class="panel-body">
      <div class="alert alert-success">

          <label for="">no data latih</label>
          <span>{{row_datanormalisasi.no_data}}</span><br>
          <label for="">Usia_x1</label>
          <span>{{row_datanormalisasi.x1_usia}}</span><br>
          <label for="">Jk_x2</label>
          <span>{{row_datanormalisasi.x2_jk}}</span><br>
          <label for="">Pekerjaan_x3</label>
          <span>{{row_datanormalisasi.x3_pekerjaan}}</span><br>
          <label for="">Riwayat Keluarga_x4</label>
          <span>{{row_datanormalisasi.x4_riwayat_keluarga}}</span><br>
          <label for="">Riwayat Jantung_x5</label>
          <span>{{row_datanormalisasi.x5_riwayat_jantung}}</span><br>
      </div>
      <ul class="list-unstyled list-group">
          <div class="col-md-6">
              <li class="list-group-item"><label for="">R Ht_x6</label> :{{row_datanormalisasi.x7_r_ht}}</li>
              <li class="list-group-item"><label for="">R Dm_x7</label> :{{row_datanormalisasi.x6_r_dm}}</li>
              <li class="list-group-item"><label for="">R Chol_x8</label> :{{row_datanormalisasi.x8_r_chol}}</li>
              <li class="list-group-item"><label for="">Obesitas_x9</label> :{{row_datanormalisasi.x9_obesitas}}</li>
              <li class="list-group-item"><label for="">Sistolik_x10</label> :{{row_datanormalisasi.x10_sistolik}}</li>
              <li class="list-group-item"><label for="">Diastolik_x11</label> :{{row_datanormalisasi.x11_diastolik}}</li>
              <li class="list-group-item"><label for="">Ldl_x12</label> :{{row_datanormalisasi.x12_ldl}}</li>
          </div>
          <div class="col-md-6">
              <li class="list-group-item"><label for="">Hdl_x13</label> :{{row_datanormalisasi.x13_hdl}}</li>
              <li class="list-group-item"><label for="">Chol_x14</label> :{{row_datanormalisasi.x14_chol}}</li>
              <li class="list-group-item"><label for="">Trig_x15</label> :{{row_datanormalisasi.x15_trig}}</li>
              <li class="list-group-item"><label for="">Glu_x16</label> :{{row_datanormalisasi.x16_glu}}</li>
              <li class="list-group-item"><label for="">Elevasi St_x17</label> :{{row_datanormalisasi.x17_elevasi_st}}</li>
              <li class="list-group-item"><label for="">Enzim Jantung_x18</label> :{{row_datanormalisasi.x18_enzim_jantung}}</li>
              <li class="list-group-item"><label for="">Kasus</label> :{{row_datanormalisasi.kelas_kasus}}</li>
          </div>
      </ul>
  </div>
  <div class="panel-footer">

  </div>
