<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RekapKhsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rekap Khs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rekap-khs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rekap Khs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nim',
            'ips',
            'ipk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
