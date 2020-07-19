<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HelperProdiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Helper Prodis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="helper-prodi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Helper Prodi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'abbr',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
