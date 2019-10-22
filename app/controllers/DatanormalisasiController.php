<?php

class DatanormalisasiController extends ControllerBase
{
    public function indexAction()
    {
        $datanormalisasi = DataNormalisasi::find(
            [
                'order' => 'no DESC'
            ]
        );
        $this->view->datanormalisasis = $datanormalisasi;
    }

    public function dataNormalisasiDetailAction($no)
    {
        $this->view->row_datanormalisasi = DataNormalisasi::findFirstByNo($no);
    }

    public function latihDataAction()
    {
        /*
    * inisasi bias
    */
        $bias =
            (
            [
                0 => -0.5,
                1 => -0.45,
                2 => -0.4,
                3 => -0.35,
                4 => -0.3,
                5 => -0.25,
                6 => -0.2,
                7 => -0.15,
                8 => -0.1,
                9 => -0.05,
                10 => 0, 0,
                11 => 0.05,
                12 => 0.1,
                13 => 0.15,
                14 => 0.2,
                15 => 0.25,
                16 => 0.3,
                17 => 0.35,
                18 => 0.4,
                19 => 0.45,
            ]
            );

        /*
         * inisiasi bobot di hidden layer
         */
        $v =
            (
            [
                /*
                 * x ke
                 */
                0 =>
                    [
                        /*
                         * V ke
                         */
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                1 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                2 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                3 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                4 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                5 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                6 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                7 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                8 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                9 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                10 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                11 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                12 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                13 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                14 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                15 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                16 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                17 =>
                    [
                        0 => -0.5,
                        1 => -0.45,
                        2 => -0.4,
                        3 => -0.35,
                        4 => -0.3,
                        5 => -0.25,
                        6 => -0.2,
                        7 => -0.15,
                        8 => -0.1,
                        9 => -0.05,
                        10 => 0, 0,
                        11 => 0.05,
                        12 => 0.1,
                        13 => 0.15,
                        14 => 0.2,
                        15 => 0.25,
                        16 => 0.3,
                        17 => 0.35,
                        18 => 0.4,
                        19 => 0.45
                    ],
                18 =>
                    $bias
            ]
            );


        /*
         * inisiasi bobot di output
         */
        $w =
            (
            [
                0 => '-0.5',
                1 => '-0.45',
                2 => '-0.4',
                3 => '-0.35',
                4 => '-0.3',
                5 => '-0.25',
                6 => '-0.2',
                7 => '-0.15',
                8 => '-0.1',
                9 => '-0.05',
                10 => '0',
                11 => '0.05',
                12 => '0.1',
                13 => '0.15',
                14 => '0.2',
                15 => '0.25',
                16 => '0.3',
                17 => '0.35',
                18 => '0.4',
                19 => '0.45',
                20 => '0.5'
            ]
            );
        $obj_datanormalisasi = DataNormalisasi::find();
        $totaldatanormalisasi = count($obj_datanormalisasi);
        $epoch = 1;

        $v = json_encode($v);
//        $v = str_replace('[[', '[', $v);
//        $v = str_replace(']]', ']', $v);
//        $v = str_replace('],[', '+', $v);

        $w = json_encode($w);
        $bias = json_encode($bias);

        return $this->response->redirect('datanormalisasi/countepoch/' . $epoch . '/' . $v . '/' . $w . '/' . $bias . '/' . $totaldatanormalisasi);
    }

    public function countEpochAction($epoch, $v, $w, $bias, $totaldatanormalisasi)
    {
        $rekursif = 1;
        echo '<div class="alert alert-success"><h3>Ini adalah epoch ke ' . $epoch . '</h3></div>';

        $v = json_decode($v);
        $v = str_replace('[', '[[', $v);
        $v = str_replace(']', ']]', $v);
        $v = str_replace('+', '],[', $v);

        $w = json_decode($w);
        $bias = json_decode($bias);
        $this->data($epoch, $rekursif, $v, $w, $bias, $totaldatanormalisasi);
    }

    public function data($epoch, $rekursif, $v, $w, $bias, $totaldatanormalisasi)
    {
        echo '<div class="alert alert-info"><h3>Ini adalah no data ke ' . $rekursif . '</h3></div>';

        $obj_data = DataNormalisasi::findFirstByNoData($rekursif);
        $arr_data = $obj_data;
        $arr_data = (
        [
            0 => $arr_data->x1_usia,
            1 => $arr_data->x2_jk,
            2 => $arr_data->x3_pekerjaan,
            3 => $arr_data->x4_riwayat_keluarga,
            4 => $arr_data->x5_riwayat_jantung,
            5 => $arr_data->x6_r_dm,
            6 => $arr_data->x7_r_ht,
            7 => $arr_data->x8_r_chol,
            8 => $arr_data->x9_obesitas,
            9 => $arr_data->x10_sistolik,
            10 => $arr_data->x11_diastolik,
            11 => $arr_data->x12_ldl,
            12 => $arr_data->x13_hdl,
            13 => $arr_data->x14_chol,
            14 => $arr_data->x15_trig,
            15 => $arr_data->x16_glu,
            16 => $arr_data->x17_elevasi_st,
            17 => $arr_data->x18_enzim_jantung,
            18 => 1,
            19 => $arr_data->kelas_kasus,
        ]
        );
//        $arr_data =
//            (
//                [
//                    0 => 0.38,
//                    1 => 0,
//                    2 => 0.1,
//                    3 => 0,
//                    4 => 0,
//                    5 => 0,
//                    6 => 0,
//                    7 => 0,
//                    8 => 0,
//                    9 => 0.25,
//                    10 => 0,
//                    11 => 0,
//                    12 => 0,
//                    13 => 0,
//                    14 => 0,
//                    15 => 0.4,
//                    16 => 0,
//                    17 => 0,
//                    18 => 1,
//                    19 => 1,
//                ]
//            );
        echo $this->dump->variable($v);
        $alpha = 0.1;

        /*
        tahap forward propagation
        merupakan tahop pertama bpnn
        */
        $hiddenlayer = new HiddenLayer();
        $output = new Output();
        $unitoutput = new UnitOutput();
        $sigmadeltainput = new SigmaDeltaInput();
        $perubahanbobotbias = new PerubahanBobotBias();

        $hiddenlayer->setArrData($arr_data, $bias, $v);
        $arr_ZIn = $hiddenlayer->ZIn();
        $output->setArrData($w);
        $arr_Z = $output->Z($arr_ZIn);
        $y_net = $output->yNet($arr_Z);
        $yk = $output->yK($y_net);

        /*
        tahap back propagation
        merupakan tahop kedua bpnn
        */
        $δk = $unitoutput->hitungEror($yk);
        $∆w = $unitoutput->koreksiBobotOutput($δk, $arr_Z, $alpha);
        $δin = $sigmadeltainput->deltaInput($δk, $∆w);
        $δ = $sigmadeltainput->informasiError($δin, $arr_Z);
        $sigmadeltainput->setArrData($arr_data);
        $sigmadeltainput->koreksiBobotBiasHidden($alpha, $δ, $counter = 0, $arr_∆vand∆vBias = []);
        $objgetarr_∆vand∆vBias = $sigmadeltainput->arr_∆vand∆vBias();
        /*
         * tahap perubahan bobot di hidden dan output
         * tahap perubahan bias
         */
        $perubahanbobotbias->setArrData($bias, $v, $w);
        $vbarudanbiashiddenbaru = $perubahanbobotbias->unitHiddenLayerBobot($objgetarr_∆vand∆vBias);
        $wbarudanbiasoutputbaru = $perubahanbobotbias->unitOutput($∆w);

        $v = $vbarudanbiashiddenbaru[0];
        $bias = $vbarudanbiashiddenbaru[1];
        $w = $wbarudanbiasoutputbaru;

//        nex data
        if ($rekursif < $totaldatanormalisasi) {
            $rekursif += 1;
            $this->data($epoch, $rekursif, $v, $w, $bias, $totaldatanormalisasi);
        } //        ulang epoch
        elseif ($rekursif == $totaldatanormalisasi) {
            $epoch += 1;
//            if (false) {
            if ($epoch < 2) {
                $this->dd->get($epoch);
                $rekursif = 1;
                $v = json_encode($v);
                $v = str_replace('[[', '[', $v);
                $v = str_replace(']]', ']', $v);
                $v = str_replace('],[', '+', $v);
                $w = json_encode($w);
                $bias = json_encode($bias);
                echo '<meta http-equiv="refresh"
                      content="0; url=http://localhost/phalcon/chd-bpnn/datanormalisasi/countepoch/' . $epoch . '/' . $v . '/' . $w . '/' . $bias . '/' . $totaldatanormalisasi . '">';
            } else {
                echo 'selesai';

                ?>

                <h2>Hasil Pelatihan :</h2>
                <h3>Bobot hidden layer</h3>
                <table class="table table-responsive table-bordered">
                    <?php for ($i = 0; $i < 20; $i++) { ?>
                    <?php } ?>
                    <tr>
                        <th>----</th>
                        <?php for ($i = 0; $i < 20; $i++) { ?>
                            <th>V <?= ($i + 1) ?></th>
                        <?php } ?>
                    </tr>
                    <?php for ($i = 0; $i < 18; $i++) { ?>
                        <tr>
                            <th>X <?= ($i + 1) ?></th>
                            <?php for ($j = 0; $j < 20; $j++) { ?>
                                <td><?= $v[$i][$j] ?></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </table>

                <h3>bias hidden layer</h3>
                <table class="table table-bordered">
                    <?php for ($i = 0; $i < 20; $i++) { ?>
                        <tr>
                            <th>bias <?= ($i + 1) ?></th>
                            <td><?= $bias[$i] ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <h3>bobot dan bias hidden ke output</h3>
                <table class="table table-bordered">
                    <?php for ($i = 0; $i < 21; $i++) { ?>
                        <tr>
                            <?php if ($i == 0) { ?>
                                <th>Bias</th>
                            <?php } else { ?>
                                <th>w <?= $i ?></th>
                            <?php } ?>
                            <td><?= $w[$i] ?></td>
                        </tr>
                    <?php } ?>
                </table>

                <?php

                $datake185 = DataNormalisasi::findFirstByNoData(185);
                $arr_data = $datake185;

                $arr_data = (
                [
                    0 => $arr_data->x1_usia,
                    1 => $arr_data->x2_jk,
                    2 => $arr_data->x3_pekerjaan,
                    3 => $arr_data->x4_riwayat_keluarga,
                    4 => $arr_data->x5_riwayat_jantung,
                    5 => $arr_data->x6_r_dm,
                    6 => $arr_data->x7_r_ht,
                    7 => $arr_data->x8_r_chol,
                    8 => $arr_data->x9_obesitas,
                    9 => $arr_data->x10_sistolik,
                    10 => $arr_data->x11_diastolik,
                    11 => $arr_data->x12_ldl,
                    12 => $arr_data->x13_hdl,
                    13 => $arr_data->x14_chol,
                    14 => $arr_data->x15_trig,
                    15 => $arr_data->x16_glu,
                    16 => $arr_data->x17_elevasi_st,
                    17 => $arr_data->x18_enzim_jantung,
                    18 => 1,
                    19 => $arr_data->kelas_kasus,
                ]
                );

                $hiddenlayer->setArrData($arr_data, $bias, $v);
                $arr_ZIn = $hiddenlayer->ZIn();
                $output->setArrData($w);
                $arr_Z = $output->Z($arr_ZIn);
                $yk = $output->yNet($arr_Z);
                $yin = $output->yK($y_net);

                ?>

                <table class="table table-bordered">

                        <?php $i = 1;
                        foreach($arr_ZIn as $ZIn) { ?>
                        <tr>
                            <th>Zin<?= $i ?></th>
                            <td><?= $ZIn ; $i++; ?></td>
                        </tr>
                        <?php } ?>
                </table>
                <table class="table table-bordered">
                        <? $j = 1; ?>
                        <?php foreach($arr_Z as $Z) { ?>
                            <tr>
                                <th>Z<?= $j ?></th>
                                <td><?= $Z ?></td>
                            </tr>
                        <?php $j++;
                        } ?>
                </table>

                <div class="alert alert-warning">
                   YK = <?= $yk ?>
                </div>
                <div class="alert alert-warning">
                   YIn = <?= $yin ?>
                </div>
<?php


            }
        }
    }


}
