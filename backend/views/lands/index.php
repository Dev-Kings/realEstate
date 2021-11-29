<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LandsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lands';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lands-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Lands', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'land_id',
            'land_location',
            'land_size',
            'land_price',
            //'admin_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
