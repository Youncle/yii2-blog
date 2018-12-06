<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class ="panel-body">
                <h2><?= \yii\helpers\Html::a($model->title, ['/post/slug', 'slug' => $model->slug]) ?></h2>
                <hr>
                <?= $model->photo ?>
                <?= \yii\helpers\Html::img('@uploadDirectorForFrontend/'. $model->photo, ['class'=>'img-responsive','alt' => 'My Photo']) ?>
                <hr>
                <p><?= $model->preview ?></p>
                <hr>
                <div class="row">
                    <div class="col-xs-6">
                        <?= \yii\helpers\Html::a('Update', ['/post/update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                        <?= \yii\helpers\Html::a('Delete', ['/post/delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                    <div class="text-right">
                        <span><?= date('m/d/Y H:i:s',$model->updatedAt) ?></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>