<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RekapPresensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rekap-presensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput() ?>

    <?= $form->field($model, 'kehadiran')->textInput() ?>

    <?= $form->field($model, 'idmatkul')->textInput() ?>

    <?= $form->field($model, 'iddosen')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
