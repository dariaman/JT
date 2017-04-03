<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MKapasitasDetail */

$this->title = 'Update Mkapasitas Detail: ' . $model->kapasitasId;
$this->params['breadcrumbs'][] = ['label' => 'Mkapasitas Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->kapasitasId, 'url' => ['view', 'id' => $model->kapasitasId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mkapasitas-detail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
