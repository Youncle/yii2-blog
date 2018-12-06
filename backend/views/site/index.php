<?php

/* @var $this yii\web\View */
/* @var $listDataProvider yii\data\ActiveDataProvider */

$this->title = 'My Blog';
?>
<div class="container">

    <?=\yii\widgets\ListView::widget([

        'dataProvider' => $listDataProvider,
        'layout' => '<div class="row">{items}</div><div class="text-center">{pager}</div>',
        'itemView' => 'post',
])

?>

</div>
