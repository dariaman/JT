<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_order".
 *
 * @property integer $orderId
 * @property string $orderTgl
 * @property string $orderJenisBayar
 * @property string $orderAlamat
 * @property string $orderKota
 * @property string $orderKelurahan
 * @property string $orderKecamatan
 * @property string $orderDaerah
 * @property string $orderKodePos
 * @property string $orderAlamatNote
 * @property string $orderGpsKoordinat
 * @property string $orderBiayaTransport
 * @property string $orderStatus
 * @property integer $orderAlamatTambahanId
 */
class TOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderTgl'], 'safe'],
            [['orderJenisBayar', 'orderAlamat', 'orderKota', 'orderKelurahan', 'orderKecamatan', 'orderDaerah', 'orderKodePos', 'orderBiayaTransport', 'orderStatus'], 'required'],
            [['orderBiayaTransport', 'orderAlamatTambahanId','userId'], 'integer'],
            [['orderJenisBayar', 'orderStatus'], 'string', 'max' => 1],
            [['orderAlamat'], 'string', 'max' => 500],
            [['orderKota', 'orderKelurahan', 'orderKecamatan', 'orderDaerah'], 'string', 'max' => 100],
            [['orderKodePos'], 'string', 'max' => 10],
            [['orderAlamatNote'], 'string', 'max' => 200],
            [['orderGpsKoordinat'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderId' => 'Order ID',
            'orderTgl' => 'Tanggal Order',
            'orderJenisBayar' => 'Jenis Bayar',
            'orderAlamat' => 'Alamat',
            'orderKota' => 'Kota',
            'orderKelurahan' => 'Kelurahan',
            'orderKecamatan' => 'Kecamatan',
            'orderDaerah' => 'Daerah',
            'orderKodePos' => 'Kode Pos',
            'orderAlamatNote' => 'Alamat Note',
            'orderGpsKoordinat' => 'Gps Koordinat',
            'orderBiayaTransport' => 'Biaya Transport',
            'orderStatus' => 'Status',
            'orderAlamatTambahanId' => 'Alamat Tambahan ID',
            'userId' => 'User Id'
        ];
    }

    /**
     * @inheritdoc
     * @return TOrderQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TOrderQuery(get_called_class());
    }
}
