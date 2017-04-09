<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MAdminSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'admin';
$this->params['breadcrumbs'][] = $this->title;

#status admin
  function Status($model){
      if ($model->adminStatus == 1){
            return html::label('<span class="glyphicon glyphicon-ok"></span>','',['style'=>['color'=>'green']]);
        }else if($model->adminStatus == 0){
            return html::label('<span class="glyphicon glyphicon-remove"></span>','',['style'=>['color'=>'red']]);
       }
  }

?>
<div class="madmin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create admin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'adminId',
            'adminPassword',
            'adminNama',
            [
                'label'=>'Status',
                'attribute'=>'adminStatus',
                'format'=>'raw',
                'value'=>function($model){
                        return Status($model);
                },
            ],
           

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
