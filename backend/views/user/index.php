<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách tài khoản';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

   <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
        <p class="pull-right">
        <?= Html::a('<i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm mới', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
        </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
           ['class' => 'yii\grid\SerialColumn',
            'header'=> 'STT',
               'headerOptions'=>[
                  'style'=>'width:15px;text-align:center'
               ],
               'contentOptions'=>
               [
                 'style'=>'width:15px;text-align:center'
               ],
            ],
            [
                'attribute'=>'username',
                'headerOptions'=>[
                    'style'=>'width:200px;text-align:center;vertical-align: middle'
                ],
                'contentOptions'=>[
                    'style'=>'width:200px;text-align:center;vertical-align: middle'
                ],
            ],
            [
                'attribute'=>'email',
                'headerOptions'=>[
                    'style'=>'width:250px;text-align:center;vertical-align: middle'
                ],
                'contentOptions'=>[
                    'style'=>'width:250px;text-align:center;vertical-align: middle'
                ],
            ],
            [
                'attribute'=>'status',
                'content'=>function($model){
                    if ($model->status == 0) {
                        return '<span class="label label-danger">Không kích hoạt</span>';
                    }else{
                        return '<span class="label label-success">kích hoạt</span>';
                    }
                },
                'headerOptions'=>[
                    'style'=>'width:150px;text-align:center;vertical-align: middle'
                ],
                'contentOptions'=>[
                    'style'=>'width:150px;text-align:center;vertical-align: middle'
                ],
            ],
            [
                'attribute'=>'created_at',
                'content'=>function($model){
                    return date('d-m-Y',$model->created_at);
                },
                'headerOptions'=>[
                    'style'=>'width:150px;text-align:center;vertical-align: middle'
                ],
                'contentOptions'=>[
                    'style'=>'width:150px;text-align:center;vertical-align: middle'
                ],
            ],
            
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
       </div>
    </div>
</div>
