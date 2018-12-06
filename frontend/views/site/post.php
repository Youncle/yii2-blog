<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class ="panel-body">
                <h2><?= \yii\helpers\Html::a($model->title, ['/post/slug', 'slug' => $model->slug]) ?></h2>
                <hr>
                <?= \yii\helpers\Html::img('@uploadDirectorForFrontend/'. $model->photo, ['class'=>'img-responsive','alt' => 'My Photo']) ?>
                <hr>
                <p><?= $model->preview ?></p>
                <hr>
                <div class="row">
                    <div class="text-right">
                        <span><?= date('m/d/Y H:i:s',$model->updatedAt) ?></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>