<?php

class DataNormalisasi extends \Phalcon\Mvc\Model
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
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $no_data;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x1_usia;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x2_jk;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x3_pekerjaan;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x4_riwayat_keluarga;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x5_riwayat_jantung;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x6_r_dm;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x7_r_ht;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x8_r_chol;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x9_obesitas;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x10_sistolik;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x11_diastolik;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x12_ldl;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x13_hdl;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x14_chol;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x15_trig;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $x16_glu;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x17_elevasi_st;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $x18_enzim_jantung;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $kelas_kasus;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_chd_bpnn");
        $this->setSource("data_normalisasi");
        $this->belongsTo('no_data', '\DataPasien', 'no', ['alias' => 'DataPasien']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'data_normalisasi';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataNormalisasi[]|DataNormalisasi|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return DataNormalisasi|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
