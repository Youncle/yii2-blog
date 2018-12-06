<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\base\User;
use common\models\base\Category;
use marqu3s\summernote\Summernote;

/* @var $this yii\web\View */
/* @var $model common\models\base\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'userId')->dropDownList(
        ArrayHelper::map(User::find()->all(),'id','username'),
        ['prompt'=>'Select user', 'data-init-plugin'=>'select2']
    );
    ?>

    <?= $form->field($model, 'categoryId')->dropDownList(
        ArrayHelper::map(Category::find()->all(),'id','name'),
        ['prompt'=>'Select category', 'data-init-plugin'=>'select2']
    );
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imageFile')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(Summernote::class, [
	'clientOptions' => [

	]
]) ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
