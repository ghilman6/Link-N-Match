<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekapPresensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Presensis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-presensi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Presensi', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export Excel', ['export-excel2'], ['class'=>'btn btn-info']); ?> 
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'kehadiran',
            'idmatkul',
            'iddosen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
