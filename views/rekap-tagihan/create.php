<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RekapTagihan */

$this->title = 'Create Rekap Tagihan';
$this->params['breadcrumbs'][] = ['label' => 'Rekap Tagihans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-tagihan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
