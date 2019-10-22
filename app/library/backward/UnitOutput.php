<?php
/**
 *
 */
class UnitOutput extends ControllerBase
{

    public function hitungEror($yk)
    {
        $hitungeror = ((1 - $yk )*($yk)*(1- $yk ));

//        echo
//        echo 'δk = '.$hitungeror.'<br>';
        return $hitungeror;
    }
    public function koreksiBobotOutput($δk, $arr_Z, $alpha)
    {
        $i_z = 1;
        $arr_koreksibobot = [];
        foreach ($arr_Z as $Z){
            $koreksibobot = $alpha * $δk * $Z;
//            echo
//            echo '∆w'.$i_z.' = '.$koreksibobot.'<br/>';

            array_push($arr_koreksibobot,$koreksibobot);

            $i_z += 1;
        }
        $arr_koreksibobotwithoutBias = $this->koreksiBias($alpha,$δk);
        array_push($arr_koreksibobot,$arr_koreksibobotwithoutBias );
        return $arr_koreksibobot;
    }
    public function koreksiBias($alpha,$δk){
        $koreksibias = $alpha * $δk;
//        echo '∆w0 = '.$koreksibias.'<br/>';
        return $koreksibias;
    }
}
 ?>
