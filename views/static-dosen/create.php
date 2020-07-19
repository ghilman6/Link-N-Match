<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaticDosen */

$this->title = 'Create Static Dosen';
$this->params['breadcrumbs'][] = ['label' => 'Static Dosens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-dosen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
