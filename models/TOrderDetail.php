<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "t_order_detail".
 *
 * @property integer $orderDetailId
 * @property integer $orderId
 * @property integer $serviceDetailId
 * @property integer $kapasitasId
 * @property string $rekanId
 * @property string $orderDetailTglKerja
 * @property string $orderDetailWaktuKerja
 * @property string $orderDetailKeluhan
 * @property string $orderDetailNote
 * @property string $orderDetailStatus
 * @property integer $orderDetailQTY
 * @property string $orderDetailProperti
 */
class TOrderDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 't_order_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['orderId', 'serviceDetailId', 'kapasitasId', 'rekanId', 'orderDetailTglKerja', 'orderDetailWaktuKerja', 'orderDetailStatus'], 'required'],
            [['orderId', 'serviceDetailId', 'kapasitasId', 'orderDetailQTY'], 'integer'],
            [['orderDetailTglKerja'], 'safe'],
            [['rekanId', 'orderDetailKeluhan'], 'string', 'max' => 300],
            [['orderDetailWaktuKerja'], 'string', 'max' => 15],
            [['orderDetailNote', 'orderDetailProperti'], 'string', 'max' => 200],
            [['orderDetailStatus'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'orderDetailId' => 'Order Detail ID',
            'orderId' => 'Order ID',
            'serviceDetailId' => 'Service Detail ID',
            'kapasitasId' => 'Kapasitas ID',
            'rekanId' => 'Rekan ID',
            'orderDetailTglKerja' => 'Order Detail Tgl Kerja',
            'orderDetailWaktuKerja' => 'Order Detail Waktu Kerja',
            'orderDetailKeluhan' => 'Order Detail Keluhan',
            'orderDetailNote' => 'Order Detail Note',
            'orderDetailStatus' => 'Order Detail Status',
            'orderDetailQTY' => 'Order Detail Qty',
            'orderDetailProperti' => 'Order Detail Properti',
        ];
    }
}
