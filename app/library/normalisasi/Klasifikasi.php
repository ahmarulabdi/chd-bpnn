<?php
/**
 *
 */
class Klasifikasi extends ControllerBase
{
    private $klasifikasi = [];
    public function sistolikKlasifikasi($sistolik)
    {
        if ($sistolik < 120) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal',
                'r' => 1
            ];
        }elseif (($sistolik >= 120) && ($sistolik <= 139)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal tinggi',
                'r' => 2
            ];
        }elseif (($sistolik >= 140) && ($sistolik <= 159)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi rendah',
                'r' => 3
            ];
        }elseif (($sistolik >= 160) && ($sistolik <= 179)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi sedang',
                'r' => 4
            ];
        }elseif ($sistolik >= 180) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi berat',
                'r' => 5
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function diastolikKlasifikasi($diastolik)
    {
        if ($diastolik < 80) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal',
                'r' => 1
            ];
        }elseif (($diastolik >= 80) && ($diastolik <= 89)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal tinggi',
                'r' => 2
            ];
        }elseif (($diastolik >= 90) && ($diastolik <= 99)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi rendah',
                'r' => 3
            ];
        }elseif (($diastolik >= 100) && ($diastolik <= 109)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi sedang',
                'r' => 4
            ];
        }elseif ($diastolik >= 110) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi berat',
                'r' => 5
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function kadarLDLKlasifikasi($ldl)
    {
        if ($ldl < 100) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal',
                'r' => 1
            ];
        }elseif (($ldl >= 100) && ($ldl <= 129)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal tinggi',
                'r' => 2
            ];
        }elseif (($ldl >= 130) && ($ldl <= 159)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi rendah',
                'r' => 3
            ];
        }elseif (($ldl >= 160) && ($ldl <= 189)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi sedang',
                'r' => 4
            ];
        }elseif ($ldl >= 190) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Hipertensi berat',
                'r' => 5
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function kadarHDLKlasifikasi($hdl)
    {
        if ($hdl < 40) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'rendah',
                'r' => 1
            ];
        }elseif (($hdl >= 40) && ($hdl < 60)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'sedang',
                'r' => 2
            ];
        }elseif ($hdl >= 60) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'tinggi',
                'r' => 3
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function kolesterolKlasifikasi($r_chol)
    {
        if ($r_chol < 200) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Masih aman',
                'r' => 1
            ];
        }elseif (($r_chol >= 200) && ($r_chol <= 239)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Batas tinggi',
                'r' => 2
            ];
        }elseif ($r_chol >= 240) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tinggi',
                'r' => 3
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function trigliseridaKlasifikasi($trig)
    {
        if ($trig < 150) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal',
                'r' => 1
            ];
        }elseif (($trig >= 150) && ($trig <= 199)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Batas tinggi',
                'r' => 2
            ];
        }elseif (($trig >= 200)&&($trig <= 499)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tinggi',
                'r' => 3
            ];
        }elseif ($trig >= 500) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Sangat tinggi',
                'r' => 4
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
    public function glukosaKlasifikasi($glu)
    {
        if ($glu < 40) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Sangat rendah',
                'r' => 1
            ];
        }elseif (($glu >= 40) && ($glu <= 59)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Rendah',
                'r' => 2
            ];
        }elseif (($glu >= 60)&&($glu <= 125)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal',
                'r' => 3
            ];
        }elseif (($glu >= 126)&&($glu <= 145)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Normal tinggi',
                'r' => 4
            ];
        }elseif (($glu >= 146)&&($glu <= 199)) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tinggi',
                'r' => 5
            ];
        }elseif ($glu >= 200) {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Sangat tinggi',
                'r' => 6
            ];
        }else {
            return $this->klasifikasi =
            [
                'klasifikasi' => 'Tidak terklasifikasi',
                'r' => 0
            ];
        }
    }
}
 ?>
