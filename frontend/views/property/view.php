<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Property */

$this->title = $model->property_id;
$this->params['breadcrumbs'][] = ['label' => 'Properties', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="property-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->property_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->property_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'property_id',
            'property_title',
            'property_description',
            'property_price',
             [
                 'attribute' => 'picture',
                 'value' => Yii::getAlias('@web').'/'.$model->picture, ['alt'=>'some', 'class'=>'thing', 'height'=>'1000px', 'width'=>'1000px'], ['site/zoom'],
                 //'value' => Yii::getAlias('/../advanced/backend/web').'/'.$model->picture, ['alt'=>'some', 'class'=>'thing', 'height'=>'1000px', 'width'=>'1000px'], ['site/zoom'],
                 'format' => ['image',['width'=>'700','height'=>'500']]
             ]
        ],
    ]) ?>


</div>
 