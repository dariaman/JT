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
            [['orderBiayaTransport', 'orderAlamatTambahanId'], 'integer'],
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
            'orderTgl' => 'Order Tgl',
            'orderJenisBayar' => 'Order Jenis Bayar',
            'orderAlamat' => 'Order Alamat',
            'orderKota' => 'Order Kota',
            'orderKelurahan' => 'Order Kelurahan',
            'orderKecamatan' => 'Order Kecamatan',
            'orderDaerah' => 'Order Daerah',
            'orderKodePos' => 'Order Kode Pos',
            'orderAlamatNote' => 'Order Alamat Note',
            'orderGpsKoordinat' => 'Order Gps Koordinat',
            'orderBiayaTransport' => 'Order Biaya Transport',
            'orderStatus' => 'Order Status',
            'orderAlamatTambahanId' => 'Order Alamat Tambahan ID',
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
