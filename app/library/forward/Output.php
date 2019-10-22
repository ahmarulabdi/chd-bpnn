<?php
/**
 *
 */
class Output extends ControllerBase
{
    public $w ;
    public function setArrData($w)
    {
        $this->w = $w;
    }
    // fungsi aktivasi
    public function Z($arr_ZIn)
    {
        $arr_Z = [];
        $i_z = 1;
        foreach ($arr_ZIn as $ZIn) {
            $Z = (1-exp(-$ZIn))/(1+exp(-$ZIn));
            array_push($arr_Z,$Z);

//            echo
//            echo "Z".$i_z." = ".$Z;
//            echo "<br/>";
            $i_z += 1;
        }
        return $arr_Z;
    }
    // mencari y net
    public function yNet($arr_Z)
    {
        $z_w = 0;
        $arr_ZW = $arr_w0 =[];
        foreach ($this->w as $key => $value) {
            if ($key == 0 ) {
//                echo 'w'.$key.' = ';
                $w0 = $this->w[$key];
//                echo $w0;
            }
            else{
//                echo 'z'.$key.' * w'.$key.' = ';
                $z_w += ($arr_Z[$key-1] * $this->w[$key]);
            }
//            echo '<br/>';
        }
        $y_net = $w0 + $z_w;

//        echo
//        echo 'y_net = '.$y_net;
        return $y_net;
    }
    public function yK($y_net)
    {
        $yk = (1-exp(-$y_net))/(1+exp(-$y_net));

//        echo
//        echo 'yk = '.$yk;
        return $yk;
    }
}

 ?>
