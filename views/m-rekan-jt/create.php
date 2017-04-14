<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MRekanJt */

$this->title = 'Tambah Rekan JT';
$this->params['breadcrumbs'][] = ['label' => 'Mrekan Jts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mrekan-jt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
