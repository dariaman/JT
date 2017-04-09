<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MEventsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'event';
$this->params['breadcrumbs'][] = $this->title;

#status 
  function Status($model){
      if ($model->eventStatus == 1){
            return html::label('<span class="glyphicon glyphicon-ok"></span>','',['style'=>['color'=>'green']]);
        }else if($model->eventStatus == 0){
            return html::label('<span class="glyphicon glyphicon-remove"></span>','',['style'=>['color'=>'red']]);
       }
  }
?>
<div class="mevents-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'eventId',
            'eventJudul',
            'eventDeskripsi:ntext',
            'eventTgl',
            'eventGambarUrl:url',
             [
                'label'=>'Status',
                'attribute'=>'eventStatus',
                'format'=>'raw',
                'value'=>function($model){
                        return Status($model);
                },
            ],
            // 'eventDibuatTgl',
            // 'eventDibuatOleh',
            // 'eventStatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
