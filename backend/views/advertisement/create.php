<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Advertisement */

$this->title = 'Thêm mới';
$this->params['breadcrumbs'][] = ['label' => 'Advertisements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertisement-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
