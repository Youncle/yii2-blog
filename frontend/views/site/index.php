<?php

/* @var $this yii\web\View */

$this->title = 'Best Blog In The World';
?>

<div class="container">

    <?=\yii\widgets\ListView::widget([

        'dataProvider' => $listDataProvider,
        'layout' => '<div class="row">{items}</div><div class="text-center">{pager}</div>',
        'itemView' => 'post',
    ])

    ?>

</div>
