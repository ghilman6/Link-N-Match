<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaticMatakuliah */

$this->title = 'Create Static Matakuliah';
$this->params['breadcrumbs'][] = ['label' => 'Static Matakuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-matakuliah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
