<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lands */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lands-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'land_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'land_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'land_price')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
