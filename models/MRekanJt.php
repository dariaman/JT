<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "m_rekan_jt".
 *
 * @property integer $rekanId
 * @property string $rekanNamaLengkap
 * @property string $rekanKelamin
 * @property string $rekanSpesifikasi
 * @property string $rekanAlamat
 * @property string $rekanEmail
 * @property string $rekanWebsite
 * @property string $rekanKota
 * @property string $rekanKelurahan
 * @property string $rekanKecamatan
 * @property string $rekanDaerah
 * @property string $rekanKodePos
 * @property string $rekanNoHp
 * @property string $rekanKendaraan
 * @property string $rekanKendaraanNopol
 * @property string $rekanStatus
 */
class MRekanJt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $kotaNama;
    public $kecamatanNama;
    public $kelurahanNama;
    
    public static function tableName()
    {
        return 'm_rekan_jt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rekanNamaLengkap', 'rekanKelamin', 'rekanSpesifikasi', 'rekanAlamat', 'rekanKelurahan', 'rekanKecamatan', 'rekanDaerah', 'rekanKodePos', 'rekanNoHp', 'rekanKendaraan', 'rekanKendaraanNopol', 'rekanStatus'], 'required'],
            [['rekanNamaLengkap', 'rekanSpesifikasi', 'rekanEmail', 'rekanWebsite'], 'string', 'max' => 200],
            [['rekanKelamin', 'rekanStatus'], 'string', 'max' => 1],
            [['rekanAlamat'], 'string', 'max' => 500],
            [['rekanKota', 'rekanKelurahan', 'rekanKecamatan', 'rekanDaerah'], 'string', 'max' => 100],
            [['rekanKodePos'], 'string', 'max' => 10],
            [['rekanNoHp'], 'string', 'max' => 20],
            [['rekanKendaraan'], 'string', 'max' => 50],
            [['rekanKendaraanNopol'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rekanId' => 'ID',
            'rekanNamaLengkap' => 'Nama Lengkap',
            'rekanKelamin' => 'Jenis Kelamin',
            'rekanSpesifikasi' => 'Spesifikasi',
            'rekanAlamat' => 'Alamat',
            'rekanEmail' => 'Email',
            'rekanWebsite' => 'Website',
            'rekanKota' => 'Kota',
            'rekanKelurahan' => 'Kelurahan',
            'rekanKecamatan' => 'Kecamatan',
            'rekanDaerah' => 'Daerah',
            'rekanKodePos' => 'Kode Pos',
            'rekanNoHp' => 'No Hp',
            'rekanKendaraan' => 'Kendaraan',
            'rekanKendaraanNopol' => 'Kendaraan Nopol',
            'rekanStatus' => 'Status',
        ];
    }

    /**
     * @inheritdoc
     * @return MRekanJtQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MRekanJtQuery(get_called_class());
    }
}
