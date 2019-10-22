<?php

class DatapasienController extends ControllerBase
{
    public function indexAction()
    {
        $this->view->datapasiens = DataPasien::find(
            [
                'order' => 'no DESC'
            ]
        );
    }
    public function tambahDataPasienAction()
    {

    }
    public function dataPasienDetailAction($no)
    {
        $this->view->row_datapasien = DataPasien::findFirstByNo($no);
    }
    public function normalisasiValidasiAction($validasi,$limitnormalisasi = null)
    {
        $datapasien = DataPasien::find(
            [
                'order' => 'no ASC'
            ]
        );
        $i = 0;
        $j = 0;
        switch ($validasi) {
            case 'check':
                foreach ($datapasien as $array_row ) {
                    $datanormalisasi = DataNormalisasi::findFirstByNoData($array_row->no);
                    // cek data yang akan dinormalisasi per row
                    if ($datanormalisasi == null ) {
                        // jika data latih tidak ada di data normalisasi maka i++
                        $i++;
                    }
                }
                if ($i >= 1) {
                    $pesan = 'Data yang akan di normalisasi ada '.$i++.' data';
                    $bool = true;
                    return $this->response->redirect('datapasien/normalisasitemp/'.$pesan.'/'.$bool);
                }
                elseif ($i++ == 0 ) {
                    $pesan = 'Tidak ada data yang akan di normalisasi';
                    return $this->response->redirect('datapasien/normalisasitemp/'.$pesan);

                }
                break;
            case 'normalisasi':
                foreach ($datapasien as $array_row ) {
                    $datanormalisasi = DataNormalisasi::findFirstByNoData($array_row->no);

                    // cek data yang akan dinormalisasi per row
                    if ($datanormalisasi == null ) {
                        $datasukses = $this->prosesnormalisasirow($array_row);
                        if ($datasukses == 1 ) {
                            $i++;
                        }
                        if ($datasukses == 0) {
                            $j++;
                        }
                    }
                }
                echo 'data yang berhasil di normalisasi adalah '.$i.' data';
                echo 'data yang gagal di normalisasi adalah '.$j.' data';
                break;
            default:
                # code...
                break;
        }

    }
    public function normalisasiTempAction($pesan,$bool)
    {
        $this->view->pesan = $pesan;
        $this->view->bool = $bool;
    }
    private function prosesNormalisasiRow($array_row)
    {
        $normalisasi =  new Normalisasi();
        $normalisasi->setArrayRowandClass($array_row);

        /*
         * inisialisasi model data normalisasi
         */
        $datanormalisasi = new DataNormalisasi();


        $datanormalisasi->save(
            [
                'no_data' => $array_row->no,
                'x1_usia' => number_format($normalisasi->usiaNormalisasi(),3),
                'x2_jk' => number_format($normalisasi->jenisKelaminNormalisasi(),3),
                'x3_pekerjaan' => number_format($normalisasi->pekerjaanNormalisasi(),3),
                'x4_riwayat_keluarga' => number_format($normalisasi->riwayatKeluargaNormalisasi(),3),
                'x5_riwayat_jantung' => number_format($normalisasi->riwayatJantungNormalisasi(),3),
                'x6_r_dm' => number_format($normalisasi->riwayatDiabetesMelitusNormalisasi(),3),
                'x7_r_ht' => number_format($normalisasi->riwayatHipertensiNormalisasi(),3),
                'x8_r_chol' => number_format($normalisasi->riwayatKolesterolNormalisasi(),3),
                'x9_obesitas' => number_format($normalisasi->riwayatObesitasNormalisasi(),3),
                'x10_sistolik' => number_format($normalisasi->sistolikNormalisasi(),3),
                'x11_diastolik' => number_format($normalisasi->diastolikNormalisasi(),3),
                'x12_ldl' => number_format($normalisasi->kadarLDLNormalisasi(),3),
                'x13_hdl' => number_format($normalisasi->kadarHDLNormalisasi(),3),
                'x14_chol' => number_format($normalisasi->kolesterolNormalisasi(),3),
                'x15_trig' => number_format($normalisasi->trigliseridaNormalisasi(),3),
                'x16_glu' => number_format($normalisasi->glukosaNormalisasi(),3),
                'x17_elevasi_st' => number_format($normalisasi->elevasiSegmentTNormalisasi(),3),
                'x18_enzim_jantung' => number_format($normalisasi->enzimJantungNormalisasi(),3),
                'kelas_kasus' => $normalisasi->kelasNormalisasi()
            ]
        );
        if ($datanormalisasi->save() == true ) {
            return 1;
        }else{
            return 0;
        }
    }

}
