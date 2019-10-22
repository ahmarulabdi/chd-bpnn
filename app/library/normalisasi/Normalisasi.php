<?php
/**
 *
 */

class Normalisasi extends ControllerBase
{
    private $usia;
    private $jk;
    private $pekerjaan;
    private $riwayat_keluarga;
    private $riwayat_jantung;
    private $r_dm;
    private $r_ht;
    private $r_chol;
    private $obesitas;

    private $klasifikasi;

    private $sistolik;
    private $diastolik;
    private $ldl;
    private $hdl;
    private $chol;
    private $trig;
    private $glu;
    private $elevasi_st;
    private $enzim_jantung;
    private $kelas_kasus;
    function setArrayRowandClass($array_row)
    {
        $this->usia = $array_row->usia;
        $this->jk = $array_row->jk;
        $this->pekerjaan = $array_row->pekerjaan;
        $this->riwayat_keluarga = $array_row->riwayat_keluarga;
        $this->riwayat_jantung = $array_row->riwayat_jantung;
        $this->r_dm = $array_row->r_dm;
        $this->r_ht = $array_row->r_ht;
        $this->r_chol = $array_row->r_chol;
        $this->obesitas = $array_row->obesitas;
        $this->sistolik = $array_row->sistolik;
        $this->diastolik = $array_row->diastolik;
        $this->ldl = $array_row->ldl;
        $this->hdl = $array_row->hdl;
        $this->chol = $array_row->chol;
        $this->trig = $array_row->trig;
        $this->glu = $array_row->glu;
        $this->elevasi_st = $array_row->elevasi_st;
        $this->enzim_jantung = $array_row->enzim_jantung;
        $this->kelas_kasus= $array_row->kasus;

        $this->klasifikasi = new Klasifikasi();
    }
    public function usiaNormalisasi()
    {
        /*
        Umur dinormalisasi dengan persamaan 2.7 seperti contoh berikut.
        Contoh normalisasi untuk variabel umur pada data pasien penyakit jantung koroner (PJK): Nilai X untuk data pertama = 57
        Nilai min(X) untuk umur dari seluruh data pasien = 54
        Nilai max(X) untuk umur dari seluruh data pasien = 62
        Maka nilai X*(normalisasi) = X – min(X) / max(X) – min(X)
	 	 	 	 	= 57 – 54 / 62 – 54
	 	 	 	 	= 0.38
                    */

        // echo '<strong class="text text-danger">'.$this->usia.'</strong>=';
        $x = $this->usia;
        $row_min = DataPasien::findFirst([
            'order' => 'usia ASC'
        ]);
        $row_max = DataPasien::findFirst([
            'order' => 'usia DESC'
        ]);
         $x_min = $row_min->usia ;
         $x_max = $row_max->usia ;
        $x1 = ($x - $x_min) / ($x_max - $x_min);
        return $x1;
    }
    public function jenisKelaminNormalisasi()
    {
        /*Normalisasi Variabel Jenis Kelamin
        Keterangan Jenis Kelamin 	Normalisasi
        Laki-laki 	0
        Perempuan 	1 */
        // echo '<strong class="text text-danger">'.$this->jk.'</strong>=';
        $jk = $this->jk;
        switch ($jk) {
            case 'L':
                $x2 = 0;
                break;
            case 'P':
                $x2 = 1;
                break;
            default:
                'null';
                break;
        }
        return $x2;
    }
    public function pekerjaanNormalisasi()
    {
        // peringkat pekerjaannya di tentukan

        // echo '<strong class="text text-danger">'.$this->pekerjaan.'</strong>=';

        switch ($this->pekerjaan) {
            case 'PNS':
                $r = 1;
                break;
            case 'Wiraswasta':
                $r = 2;
                break;
            case 'Pensiunan':
                $r = 3;
                break;
            case 'Honorer':
                $r = 4;
                break;
            case 'Dokter':
                $r = 5;
                break;
            case 'Dosen':
                $r = 6;
                break;
            case 'Petani':
                $r = 7;
                break;
            case 'Buruh':
                $r = 8;
                break;
            case 'IRT':
                $r = 9;
                break;
            case 'Pedagang':
                $r = 10;
                break;
            case 'Supir':
                $r = 11;
                break;
            case 'Nelayan':
                $r = 12;
                break;
            case 'Lainnya':
                $r = 13;
                break;

                # tidak diketahui
            default:
                $r = 14;
                break;
        }
        $R = 14;
        return $x3 = ($r - 1)/($R-1);
    }
    public function riwayatKeluargaNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->riwayat_keluarga.'</strong>=';
        switch ($this->riwayat_keluarga) {
            case 'Tidak_ada':
                $x4 = 0;
                break;
            case 'Ada':
                $x4 = 1;
                break;

            default:
                $x4 = 'null';
                break;
        }
        return $x4;
    }
    public function riwayatJantungNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->riwayat_jantung.'</strong>=';
        switch ($this->riwayat_jantung) {
            case 'Tidak_ada':
                $x5 = 0;
                break;
            case 'Ada':
                $x5 = 1;
                break;

            default:
                $x5 = 'null';
                break;
        }
        return $x5;
    }
    public function riwayatDiabetesMelitusNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->r_dm.'</strong>=';
        switch ($this->r_dm) {
            case 'Tidak_ada':
                $x6 = 0;
                break;
            case 'Ada':
                $x6 = 1;
                break;

            default:
                $x6 = 'null';
                break;
        }
        return $x6;
    }
    public function riwayatHipertensiNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->r_ht.'</strong>=';
        switch ($this->r_ht) {
            case 'Tidak_ada':
                $x7 = 0;
                break;
            case 'Ada':
                $x7 = 1;
                break;

            default:
                $x7 = 'null';
                break;
        }
        return $x7;
    }
    public function riwayatKolesterolNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->r_chol.'</strong>=';
        switch ($this->r_chol) {
            case 'Tidak_ada':
                $x8 = 0;
                break;
            case 'Ada':
                $x8 = 1;
                break;

            default:
                $x8 = 'null';
                break;
        }
        return $x8;
    }
    public function riwayatObesitasNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->obesitas.'</strong>=';
        switch ($this->obesitas) {
            case 'Tidak':
                $x9 = 0;
                break;
            case 'Ada':
                $x9 = 1;
                break;

            default:
                $x9 = 'null';
                break;
        }
        return $x9;
    }
    public function sistolikNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->sistolik.'</strong>=';
        $klasifikasi = $this->klasifikasi->sistolikKlasifikasi($this->sistolik);
        $r =  $klasifikasi['r'];
        $R =  5 ;
        return $x10 = ($r-1)/($R -1);

    }
    public function diastolikNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->diastolik.'</strong>=';
        $klasifikasi = $this->klasifikasi->sistolikKlasifikasi($this->diastolik);

        $r =  $klasifikasi['r'];
        $R =  5 ;
        return $x11 = ($r-1)/($R -1);

    }
    public function kadarLDLNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->ldl.'</strong>=';
        $klasifikasi = $this->klasifikasi->kadarLDLKlasifikasi($this->ldl);

        $r =  $klasifikasi['r'];
        $R =  5 ;
        return $x12 = ($r-1)/($R -1);

    }
    public function kadarHDLNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->hdl.'</strong>=';
        $klasifikasi = $this->klasifikasi->kadarHDLKlasifikasi($this->hdl);

        $r =  $klasifikasi['r'];
        $R =  3 ;
        return $x13 = ($r-1)/($R -1);

    }
    public function kolesterolNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->r_chol.'</strong>=';
        $klasifikasi = $this->klasifikasi->kolesterolKlasifikasi($this->r_chol);

        $r =  $klasifikasi['r'];
        $R =  3 ;
        return $x14 = ($r-1)/($R -1);
    }
    public function trigliseridaNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->trig.'</strong>=';
        $klasifikasi = $this->klasifikasi->trigliseridaKlasifikasi($this->trig);
        $r =  $klasifikasi['r'];
        $R =  4 ;
        return $x15 = ($r-1)/($R -1);
    }
    public function glukosaNormalisasi()
    {
        // echo '<strong class="text text-danger">'.$this->glu.'</strong>=';
        $klasifikasi = $this->klasifikasi->glukosaKlasifikasi($this->glu);
        $r =  $klasifikasi['r'];
        $R =  6 ;
        return $x16 = ($r-1)/($R -1);
    }
    public function elevasiSegmentTNormalisasi()
    {
        switch ($this->elevasi_st) {
            case 'Tidak_ada':
                $x17 = 0;
                break;
            case 'Ada':
                $x17 = 1;
                break;

            default:
                $x17 = 'null';
                break;
        }
        return $x17;
    }
    public function enzimJantungNormalisasi()
    {

        switch ($this->enzim_jantung) {
            case 'Normal':
                $x17 = 0;
                break;
            case 'Meningkat':
                $x17 = 1;
                break;

            default:
                $x17 = 'null';
                break;
        }
        return $x17;
    }
    public function kelasNormalisasi()
    {

        // echo $this->kelas;
        switch ($this->kelas_kasus) {
            case 'APTS':
                $kelas = 1 ;
                break;
            case 'NSTEMI':
                $kelas = 2 ;
                break;
            case 'STEMI':
                $kelas = 3 ;
                break;

            default:
                $kelas = 'null';
                break;
        }
        return $kelas;
    }
}

 ?>
