<?php

use yii\helpers\Html;
use yii\grid\GridView;

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

            'orderId',
            'orderTgl',
            'orderJenisBayar',
            'orderAlamat',
            'orderKota',
            'orderKelurahan',
            'orderKecamatan',
            'orderDaerah',
            'orderKodePos',
            'orderAlamatNote',
            'orderGpsKoordinat',
            'orderBiayaTransport',
            'orderStatus',
            [
                'header' => 'Detail',
                'format' => 'raw',
                'value' => function($data)
                {
                    return Html::a('Detail', ['detail', 'id' => $data['orderId']]);
                }
                
            ]
//            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <p>
        <?= Html::a('Buat Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
