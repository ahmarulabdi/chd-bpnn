<?php
/**
 * Created by PhpStorm.
 * User: rndmjck
 * Date: 01/01/18
 * Time: 17:48
 */

class PerubahanBobotBias extends ControllerBase
{
    public $v;
    public $w;
    public $bias;

    public function setArrData($bias, $v, $w)
    {
        $this->v = $v;
        $this->w = $w;
        $this->bias = $bias;
    }

    public function unitHiddenLayerBobot($objgetarr_∆vand∆vBias)
    {
        $v = $this->v;
        $counter = 0;
        $arr_biashiddenbaru = [];
        $arr2_vbaru = [];
        while ($counter < 20) {
            $arrgetarr_∆vand∆vBias = $objgetarr_∆vand∆vBias;
            $arr_vbaru = [];
            if ($counter != 19) {
                for ($j_v = 0; $j_v < 18; $j_v++) {
                    echo '<br>V' . $counter . 'forXbaru ke-' . $j_v . ' = ' . $v[$counter][$counter] . ' + ' . $arrgetarr_∆vand∆vBias[$counter][$j_v];
                    $vbaru = $v[$counter][$counter] + $arrgetarr_∆vand∆vBias[$counter][$j_v];
////                echo
                    echo ' = ' . $vbaru;

                    array_push($arr_vbaru, $vbaru);
                }

                $biashiddenbaru = $this->unitHiddenLayerBias($counter, $arrgetarr_∆vand∆vBias[$counter][18], $v[18][$counter]);
                array_push($arr_biashiddenbaru, $biashiddenbaru);
            } else {
                for ($j_v = 0; $j_v < 18; $j_v++) {
                    echo '<br>V' . $counter . 'forXbaru ke-' . $j_v . ' = ' . $v[$j_v][$counter] . ' + ' . $arrgetarr_∆vand∆vBias[$counter][$j_v];
                    $vbaru = $v[$j_v][$counter] + $arrgetarr_∆vand∆vBias[$counter][$j_v];
////                echo
                    echo ' = ' . $vbaru;

                    array_push($arr_vbaru, $vbaru);
                }

                $biashiddenbaru = $this->unitHiddenLayerBias($counter, $arrgetarr_∆vand∆vBias[$counter][18], $v[18][$counter]);
                array_push($arr_biashiddenbaru, $biashiddenbaru);
            }

            array_push($arr2_vbaru, $arr_vbaru);
            $counter += 1;
        };

//            echo $this->dump->variable($arr2_vbaru)
        $dimensi2 = [];
        for ($h = 0; $h < 18; $h++) {
            $dimensi1 = [];
            for ($i = 0; $i < 20; $i++) {
                array_push($dimensi1,$arr2_vbaru[$i][$h]);
            }
            array_push($dimensi2,$dimensi1);
        }
        return array($dimensi2, $arr_biashiddenbaru);
    }

    public
    function unitHiddenLayerBias($counter, $arrgetarr_∆vand∆vBias, $v)
    {
        echo '<br><strong>bias' . $counter . 'baru = ' . $v . ' + ' . $arrgetarr_∆vand∆vBias;
        $biashiddenbaru = $v + $arrgetarr_∆vand∆vBias;
        echo '</strong>';
////                echo
        echo ' = ' . $biashiddenbaru;

        return $biashiddenbaru;
    }

    public
    function unitOutput($∆w)
    {
        $arr_w = $this->w;
        $i = 0;
        $arr_wbaru = [];
        $wbarudanbiasoutputbaru = [];
        while ($i < count($arr_w)) {
            if ($i == 20) {
                $biasooutputbaru = $arr_w[0] + $∆w[20];
                //  echo
//                echo '<br/>w'.(0).'baru = '.$arr_w[0].' + '.$∆w[20];
//                echo ' = '.$biasooutputbaru;
                array_push($wbarudanbiasoutputbaru, $biasooutputbaru);
            } else {
                $wbaru = $arr_w[$i + 1] + $∆w[$i];
                //            echo
//                echo '<br/>w'.($i+1).'baru = '.$arr_w[$i+1].' + '.$∆w[$i];
//                echo ' = '.$wbaru;
                array_push($wbarudanbiasoutputbaru, $wbaru);
            }
            $i++;
        }

//        susun ulang array
        $temp = $wbarudanbiasoutputbaru;
        for ($i = 0; $i < count($wbarudanbiasoutputbaru); $i++) {
            if ($i == 20) {
                $temp[0] = $wbarudanbiasoutputbaru[$i];
            } else {
                $temp[$i + 1] = $wbarudanbiasoutputbaru[$i];
            }
        }
        return $wbarudanbiasoutputbaru;
    }
}