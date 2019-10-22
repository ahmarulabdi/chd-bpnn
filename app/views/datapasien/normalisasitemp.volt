<div class="row">
  <div class="col-md-12">
      <div class="alert alert-info">
          <a href="{{ url('datalatih/')}}"  class="btn btn-default">
            <i class="fa fa-arrow-left"></i>
        </a>
          {{ pesan }}
            {% if bool == true %}
            <button type="button" id="btnNormalisasi" class="btn btn-primary pull-right">
                Normalisasikan <i class="glyphicon glyphicon-plus"></i>
            </button>
            {% else %}
                <button type="button" class="btn btn-primary pull-right" disabled>
                    Normalisasikan <i class="glyphicon glyphicon-plus"></i>
                </button>
            {% endif %}
      </div>
    </div>

    <div id="normalisasiValidator">
        <div class="alert alert-warning">
            Melakukan proses normalisasi dengan data yang banyak akan memakan waktu cukup lama
        </div>
        <form class="" action="{{url('datapasien/normalisasivalidasi/normalisasi')}}" method="post">
            <div class="btn-group btn-group-md pull-right">
                <button type="submit" class="btn btn-success">
                    Lanjutkan <i class="glyphicon glyphicon-check"></i>
                </button>
                <button type="reset" class="btn btn-danger" id="hideNormalisasiValidator">
                  Batalkan <i class="glyphicon glyphicon-remove"></i>
                </button>
            </div>

        </form>
    </div>
  </div>
</div>
<script type="text/javascript">
    $('#normalisasiValidator').hide();
    $('#btnNormalisasi').click(function () {
        $('#normalisasiValidator').fadeToggle();
    });

</script>
