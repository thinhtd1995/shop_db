<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\News */

$this->title = 'Thêm mới tin tức';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
