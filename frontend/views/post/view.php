<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\base\Comment;

$commentFormModel=new \frontend\models\CommentForm();

/* @var $this yii\web\View */
/* @var $model common\models\base\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <hr>
        <?= Html::img('@uploadDirectorForFrontend/'. $model->photo, ['class'=>'img-responsive','alt' => 'My Photo']) ?>
        <?= $model->content?>
        <hr>
        <div class="row">
            <div class="col-xs-6">
                <time class="timeago badge" datetime="<?= date('m/d/Y H:i:s',$model->updatedAt) ?>"></time>
            </div>
        </div>

    <div class="comment-form">

        <?php $form = ActiveForm::begin([
            'id' => 'comment-form',
            'action' => ['comment/create', 'slug'=>$model->slug],
            //'action' => '/comment/create',
            //'action' => Url::to('/comment/create'),
            //'action' => Url::to(['comment/create']),
            //'action' => Yii::$app->homeUrl.'comment/create',
            'options' => ['class' => 'form-horizontal'],
        ]); ?>



        <?= $form->field($commentFormModel, 'author')->textInput(['maxlength' => true]) ?>

        <?= $form->field($commentFormModel, 'body')->textarea(['rows' => 6]) ?>



        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-info']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
    </div>
</div>

