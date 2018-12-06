<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\Datepicker;

/* @var $this yii\web\View */
/* @var $model common\models\base\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<!--    --><?//= $form->field($model,'birthday')->widget(DatePicker::class,
//        [
//            'options' => [
//                'class' => 'form-control',
//                'autocomplete' => 'off'
//            ],
//            'clientOptions' => ['dateFormat' => 'php:d.m.Y'],
//            'dateFormat' => 'php:d.m.Y'
//        ]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList(['10' => 'Active', '0' => 'Inactive']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
