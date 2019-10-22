<?php
/**
 * Created by PhpStorm.
 * User: rndmjck
 * Date: 29/12/17
 * Time: 15:06
 */

class SigmaDeltaInput extends HiddenLayer
{
    /*
     * menggunakan data asli
     */
    public $x;

    /**
     * @param mixed $arr_data
     */
    public function setArrData($arr_data)
    {
        $this->x = $arr_data;
    }
    public function deltaInput($δk,$arr_∆w){
        $i_∆w = 1;
        $arr_deltainput = [];
        foreach ( $arr_∆w as $∆w) {
            $deltainput = $δk * $∆w;

//            echo 'δin';
//            echo ' <br/>δin'.$i_∆w.' = '.$deltainput;
            $i_∆w += 1;
            array_push($arr_deltainput,$deltainput);
            if ($i_∆w == 21 ){
                break;
            }
        }
        return $arr_deltainput;
    }
    public function informasiError($arr_δin,$arr_Z){
        $arr_informasierror = [];
        $i_x = 0;
        $hiddenlayer = new HiddenLayer();
        foreach ($arr_δin as $δin) {
            $informasierror = $δin * $arr_Z[$i_x] * (1 - $arr_Z[$i_x]);

//            echo
//            echo '<br/>δ'.($i_x+1).' = '.$informasierror;
            array_push($arr_informasierror,$informasierror);

            $i_x += 1;
        }
        return $arr_informasierror;
    }
    public function koreksiBobotBiasHidden($alpha, $δ, $counter, $arr_∆vand∆vBias){
//        echo '<br/>----------------------';
        $i_x = 0;
        foreach ($this->x as $x) {
            if ($i_x != 18){
                $∆v = $alpha * $δ[$counter] * $x;
                //            echo
//                            echo '<br/>∆v'.($counter).' = '.$alpha .' * '. $δ[$counter] .' * '. $x;


//                echo '<br/>∆v'.$counter.'x'.$i_x.' = '.$∆v;
                array_push($arr_∆vand∆vBias,$∆v);
            }
            else{
                $∆vbias  = $alpha * $δ[$counter] ;
//              echo '<br/>∆vbias = '.$alpha .' * '. $δ[0];
//                echo '<br/><strong>∆vbias'.$counter.' = '.$∆vbias.'</strong>';
                array_push($arr_∆vand∆vBias,$∆vbias);
                break;
            }
            $i_x  += 1;
        }
        if ($counter == 19){
//        return $arr_∆vand∆vBias;
            $this->getarr_∆vand∆vBias = $arr_∆vand∆vBias;
        }
        if ($counter <= 18){
//           rekursif
            $counter += 1;
            $this->koreksiBobotBiasHidden($alpha,$δ,$counter,$arr_∆vand∆vBias);
        }
    }
    public $getarr_∆vand∆vBias;
    public function arr_∆vand∆vBias(){
        $getarr_∆vand∆vBias= $this->getarr_∆vand∆vBias;

//        return $this->getarr_∆vand∆vBias;
        $trim = 19;
        $no = 0;
        $divcount = (count($getarr_∆vand∆vBias))/$trim;
        $objgetarr_∆vand∆vBias  = [];

        /*
         * konversi array 1 dimensi ke 2 dimensi
         */
        $assos = [];
        for($i=0; $i < $divcount; $i++){
            for($j=0; $j < $trim ; $j++){
                $new[$i][$j]=$getarr_∆vand∆vBias[$no];
                if ($j < 18){
                    array_push($new[$i],$new[$i][$j]);
                }
                $no++;
            }
            $assos = $new[$i];
            array_push($objgetarr_∆vand∆vBias ,$assos );
        }
        return $objgetarr_∆vand∆vBias;
    }
}