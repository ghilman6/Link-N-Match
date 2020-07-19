<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapTagihan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'terbayar')->textInput() ?>

    <?= $form->field($model, 'sisa_tagihan')->textInput() ?>

    <?= $form->field($model, 'idstatus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
