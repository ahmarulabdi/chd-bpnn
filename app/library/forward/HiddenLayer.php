<?php

/**
 *
 */
class HiddenLayer extends ControllerBase
{
    public $bias;
    public $v ;
//    public $x =
//        (
//            // menggunakan data native
//        [
//            0 => 0.38,
//            1 => 0,
//            2 => 0.1,
//            3 => 0,
//            4 => 0,
//            5 => 0,
//            6 => 0,
//            7 => 0,
//            8 => 0,
//            9 => 0.25,
//            10 => 0,
//            11 => 0,
//            12 => 0,
//            13 => 0,
//            14 => 0,
//            15 => 0.4,
//            16 => 0,
//            17 => 0,
//            18 => 1,
//            19 => 1
//        ]
//        );
    /*
     * menggunakan data asli
     */
    public $x;

    /**
     * @param mixed $arr_data
     */
    public function setArrData($arr_data,$bias,$v)
    {

        $this->x = $arr_data;
        $this->bias = $bias;
        $this->v = $v;

    }

    public function ZIn()
    {
        $i_bias = 0;
        $arr_ZIn = [];
        $i_ZIn = 0;
        $x = $this->x;
        $v = $this->v;


        for ($i = 0; $i < 20; $i++) {
            //ngambil bobot;
            $bias = $this->bias[$i_bias];
            echo '<br/>';
//            echo $bias;
            $zigma_x_w = 0;
            if ($i != 19){
                for ($i_x_w = 0; $i_x_w < 18; $i_x_w++) {
                    //                manja kali lah yang ke 19 niihh kamprettt
//                        echo ' [V'.$i.']+ (' . $x[$i_x_w] . ' * ' . $v[$i][$i_bias] . ')   ';
                        $x_w = $x[$i_x_w] * $v[$i][$i_bias];

                    $zigma_x_w += $x_w;
                }
                $ZIn = $bias + $zigma_x_w  ;
                echo '<br/><span class="text text-danger" > z_in' . ($i_ZIn) . ' = ' . $ZIn . '</span>';
            }
            else{
                for ($i_x_w = 0; $i_x_w < 18; $i_x_w++) {
//                    echo ' [V'.$i.']+ (' . $x[$i_x_w] . ' * ' . $v[$i_x_w][$i] . ')   ';
                    $x_w19 = $x[$i_x_w] * $v[$i_x_w][$i];
                    $zigma_x_w += $x_w19;
                }
                $ZIn = $bias + $zigma_x_w ;
                echo '<br/><span class="text text-danger" > z_in' . ($i_ZIn) . ' = ' . $ZIn . '</span>';
            }

            array_push($arr_ZIn, $ZIn);
            $i_ZIn += 1;
//             if ($i == 0) {
//                 // stop sampai zIn ke 1 saja
//                 break;
//             }
            // increament index bobot
            $i_bias += 1;
            // ulang sampai zIn ke 20
//            echo '<br/>';
        }
        return $arr_ZIn;
    }

}

?>
