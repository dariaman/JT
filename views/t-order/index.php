<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order';
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
            [
                'header' => 'Order ID',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a($data['orderId'], ['detail', 'id' => $data['orderId']]);
                }
            ],
            [
                'attribute' => 'orderTgl',
                'format' => ['date', 'php:d M Y']
            ],
            [
                'header' => 'Jenis Bayar',
                'value' => function($data)
                {
                    if($data['orderStatus'] = "1"){
                        return "Tunai";
                    }
                    else if($data['orderStatus'] = "2"){
                        return "Transfer";
                    }
                    else if($data['orderStatus'] = "3"){
                        return "Karu Kredit";
                    }
                }
            ],
            'orderAlamat',
//            'orderKota',
//            'orderKelurahan',
//            'orderKecamatan',
//            'orderDaerah',
//            'orderKodePos',
            'orderAlamatNote',
            [
                'label' => 'Biaya Transport',
                'value' => 'orderBiayaTransport',
                'format' => ['decimal', 0],
                'contentOptions' => ['Align' => 'right','style' => 'width: 130px;'],
                'headerOptions' => ['style' => 'text-align:center']
            ],
            [
                'header' => 'Download Invoice',
                'format' => 'raw',
                'value' => function($data){
                    return Html::a('Print Invoice',['print-inv','orderid' => $data['orderId']]);
                }
            ],
//            [
//                'class' => '\kartik\grid\BooleanColumn',
//                'header' => 'Order Status',
//                'trueLabel' => 'Yes', 
//                'falseLabel' => 'No',
//                'value' => function($data)
//                {
//                    return $data['orderStatus'];
//                }
//            ],
            ['class' => 'yii\grid\ActionColumn','template'=>'{update}'],
        ],
    ]); ?>

    <p>
        <?= Html::a('Buat Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
