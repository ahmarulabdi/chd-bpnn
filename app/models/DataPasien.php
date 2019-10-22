<?php

class DataPasien extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $no;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    public $usia;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $jk;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $pekerjaan;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $riwayat_keluarga;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $riwayat_jantung;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $r_dm;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $r_ht;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $r_chol;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $obesitas;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $sistolik;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $diastolik;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $ldl;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $hdl;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $chol;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $trig;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $glu;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $elevasi_st;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $enzim_jantung;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $kasus;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $tipe;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_chd_bpnn");
        $this->setSource("data_pasien");
        $this->hasMany('no', 'DataNormalisasi', 'no_data', ['alias' => 'DataNormalisasi']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data_pasien';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataPasien[]|DataPasien|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataPasien|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
