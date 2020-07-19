<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaticMatakuliahSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Static Matakuliahs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="static-matakuliah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Static Matakuliah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            'name',
            'sks',
            'abbr',
            //'total_student',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
