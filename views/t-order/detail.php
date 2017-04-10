<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Detail';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'orderDetailId',
            'orderId',
            'serviceDetailId',
            'kapasitasId',
            'rekanId',
            'orderDetailTglKerja',
            'orderDetailWaktuKerja',
            'orderDetailKeluhan',
            'orderDetailNote',
            'orderDetailStatus',
            'orderDetailQTY',
            'orderDetailProperti',
            [
                'header' => 'Download Work Order',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a('Print WO',['print-wo','id' => $data['orderDetailId'],'orderid' => $data['orderId']]);
                }
            ],
            [
                'header' => 'Download Invoice',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a('Print Invoice',['print-inv','id' => $data['orderDetailId'],'orderid' => $data['orderId']]);
                }
            ]
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <?= Html::a('Buat Order', ['create-detail','id' => Yii::$app->request->get('id')], ['class' => 'btn btn-success']) ?>
    </p>
</div>
