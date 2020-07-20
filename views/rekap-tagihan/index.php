<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekapTagihanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Tagihans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-tagihan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Tagihan', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Export PDF', ['export-pdf'], ['class'=>'btn btn-danger']); ?> 
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
            'terbayar',
            'sisa_tagihan',
            'idstatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
