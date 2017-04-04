<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TOrderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Torders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="torder-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Torder', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
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
            // 'orderKelurahan',
            // 'orderKecamatan',
            // 'orderDaerah',
            // 'orderKodePos',
            // 'orderAlamatNote',
            // 'orderGpsKoordinat',
            // 'orderBiayaTransport',
            // 'orderStatus',
            // 'orderAlamatTambahanId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
