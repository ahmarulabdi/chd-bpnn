<div class="panel panel-default">
  <div class="panel-heading">
    <h3>Data Normalisasi</h3>
    <div class="pull-right">
      <a type="button" class="btn btn-primary" href="{{url('datanormalisasi/latihdata')}}">
        Latih Data
      </a>
    </div>
  </div>
  <div class="panel-body">
      <table class="table table-hover">
        <thead>
            <tr>
                <th>no</th>
                <th>no_data</th>
                <th>x1_usia</th>
                <th>x2_jk</th>
                <th>x3_pekerjaan</th>
                <th>x4_riwayat_keluarga</th>
                <th>x5_riwayat_jantung</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {% for datanormalisasi in datanormalisasis %}
            <tr>
                <td>{{ datanormalisasi.no }}</td>
                <td>{{ datanormalisasi.no_data }}</td>
                <td>{{ datanormalisasi.x1_usia }}</td>
                <td>{{ datanormalisasi.x2_jk }}</td>
                <td>{{ datanormalisasi.x3_pekerjaan }}</td>
                <td>{{ datanormalisasi.x4_riwayat_keluarga }}</td>
                <td>{{ datanormalisasi.x5_riwayat_jantung }}</td>
                <td><a href="{{url('datanormalisasi/datanormalisasidetail/'~datanormalisasi.no )}}" type="button" class="btn btn-info">
                    Detail
                </a></td>
            </tr>
            {% endfor %}
        </tbody>
      </table>
  </div>
  <div class="panel-footer">

  </div>
</div>
