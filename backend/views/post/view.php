<?php

use yii\helpers\Html;
use common\models\base\Comment;

/* @var $this yii\web\View */
/* @var $model common\models\base\Post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$comment = new Comment();
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
        <hr>
        <?= Html::img('@uploadDirectorForFrontend/'. $model->photo, ['class'=>'img-responsive','alt' => 'My Photo']) ?>
        <?= $model->content?>
        <hr>
        <?= $comment->author ?>
        <hr>
        <?= $comment->body ?>
        <div class="row">
            <div class="col-xs-6">
                <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => 'Are you sure you want to delete this item?',
                        'method' => 'post',
                    ],
                ]) ?>
            </div>
            <div class="col-xs-6">
                <time class="timeago badge" datetime="<?= date('m/d/Y H:i:s',$model->updatedAt) ?>"></time>
            </div>
        </div>
    </div>
</div>

