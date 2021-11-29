<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lands */

$this->title = 'Update Lands: ' . $model->land_id;
$this->params['breadcrumbs'][] = ['label' => 'Lands', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->land_id, 'url' => ['view', 'id' => $model->land_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lands-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
