<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\HelperProdi */

$this->title = 'Create Helper Prodi';
$this->params['breadcrumbs'][] = ['label' => 'Helper Prodis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helper-prodi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
