<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lands */

$this->title = 'Create Lands';
$this->params['breadcrumbs'][] = ['label' => 'Lands', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lands-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
