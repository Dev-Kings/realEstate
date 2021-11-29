<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Property */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="property-form">

<?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

<?= $form->field($model, 'property_title')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'property_description')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'property_price')->textInput(['maxlength' => true]) ?>

<?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
