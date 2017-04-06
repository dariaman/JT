<?php

use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MVideoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mvideo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'videoUrl:url',
            [
                'class' => '\kartik\grid\BooleanColumn',
                'header' => 'Video Status',
                'trueLabel' => 'Yes', 
                'falseLabel' => 'No',
                'value' => function($data)
                {
                    return $data['videoStatus'];
                }
            ],

            ['class' => 'yii\grid\ActionColumn','template' => '{update}'],
        ],
    ]); ?>
    
    <p>
        <?= Html::a('Tambah Video', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>
