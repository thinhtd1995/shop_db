<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdvertisementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Advertisements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="advertisement-index">

  
    
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Thêm mới
        </h3>
    </div>
    <div class="panel-body">
        <p>
           <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
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
                  'attribute'=>'images',
                   'content'=>function($model){
                      $host = 'http://'.$_SERVER['HTTP_HOST'];
                        $homeUrl = str_replace('/backend/web', '', Yii::$app->urlManager->baseUrl);
                      return '<img src= " '.$host.$homeUrl.'/'.$model->images.'" width="150px" class = "img-responsives" >';

                   },
                'headerOptions'=>[
                    'style'=>'width:250px;text-align:center;vertical-align: middle'
                ],
                'contentOptions'=>[
                    'style'=>'width:250px;text-align:center;vertical-align: middle'
                ],

                ],
            'orders_sort',
            'link',
              [
                'attribute'=>'type',
                'content'=>function($model){
                    if ($model->type == 1) {
                        return '<span class="label label-success">Banner header</span>';
                    }else if ($model->type == 2){
                        return '<span class="label label-success">Banner danh mục tin</span>';
                    }else if ($model->type == 3){
                        return '<span class="label label-success">Banner right</span>';
                    }else{
                        return '<span class="label label-success">Logo</span>';
                    }
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
