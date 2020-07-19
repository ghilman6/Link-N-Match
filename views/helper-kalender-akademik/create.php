<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HelperKalenderAkademik */

$this->title = 'Create Helper Kalender Akademik';
$this->params['breadcrumbs'][] = ['label' => 'Helper Kalender Akademiks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helper-kalender-akademik-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
