<?php

use yii\helpers\Html;
use kartik\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\MKapastiasDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kapasitas Detail';
$this->params['breadcrumbs'][] = $this->title;

function Status($model){
    if ($model->kapasitasStatus == 1){
          return html::label('<span class="glyphicon glyphicon-ok"></span>','',['style'=>['color'=>'green']]);
      }else if($model->kapasitasStatus == 0){
          return html::label('<span class="glyphicon glyphicon-remove"></span>','',['style'=>['color'=>'red']]);
     }
}
?>
<div class="mkapasitas-detail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'kapasitasId',
            'kapasitasJudul',
            'kapasitasHarga',
            'serviceDetailId',
            [
                'label'=>'Status',
                'attribute'=>'kapasitasStatus',
                'format'=>'raw',
                'value'=>function($model){
                        return Status($model);
                },
            ],
            // 'kapasitasDeskripsi:ntext',

            ['class' => 'yii\grid\ActionColumn','template' => '{update}'],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('Tambah Kapasitas Detail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
