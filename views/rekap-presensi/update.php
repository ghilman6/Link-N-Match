<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPresensi */

$this->title = 'Update Rekap Presensi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rekap Presensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rekap-presensi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
