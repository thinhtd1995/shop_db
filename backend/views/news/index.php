<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\widgets\ActiveForm;
use backend\models\News;
use frontend\components\widgets\CountnewsWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$url_back = base64_encode($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING']);


$this->title = 'Danh sách tin tức';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="news-index">
    <div class="panel panel-default">

        <div class="panel-heading">
            <h4 class="panel-title pull-left"><?= Html::encode($this->title) ?></h4>
            <button onclick="$('#search').toggle()" class="btn btn-default btn-sm pull-right" style="margin-left: 10px" title="Tìm kiếm"><i class="fa fa-search"></i></button>

            <a href="<?php echo Url::to(['/news/create']); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Thêm mới</a>

            <div class="clearfix"></div>

        </div>
        <div class="panel-body">
         <div class="col-md-12 col-xs-12" id="right"> 
            <div id="search" style="display: none;">

                <div class="news-search">

                    <?php $form = ActiveForm::begin([
                        'id' => 'form-main-search',
                        'method' => 'GET',
                        'action'=> ['/news/search'],
                    ]); ?>  
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group field-news-title">

                                <input type="text" id="news-title" class="form-control" name="namesearch" placeholder="Từ khóa tìm kiếm">

                                <div class="help-block"></div>
                            </div>    
                        </div>   

                        <div class="col-md-4">  
                            <select class="form-control" name="cat_name">
                                <option value="">Chọn danh mục</option>

                                <option value="1" name="select-option">Vinaphone</option> 
                                <option value="2" name="select-option">Mobifone</option> 
                                <option value="3" name="select-option">Viettel</option> 

                            </select>        
                        </div>


                        <div class="col-md-2 pull-right">
                            <div class="form-group">                
                                <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                            </div>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="status text-right">
            </div>
            <table class="table table-style">
                <thead>
                   <?php 
                   $count1 = $count % 20;
                   $count2 = $count /20;
                   $a = CEIL($count2)-$pages->page ;

                   ?>
                   <?php if($count > 0): ?>
                      <tr>
                        <th style="width: 50px">ID</th>
                        <th>Nội dung</th>
                        <div class="summary pull-right" style="color: black;">Trình bày <b>1-<?php echo $a == 1?$count1:'20' ?>  </b> trong số <b><?php echo $count; ?></b> mục.</div>

                    </tr>
                <?php endif; ?>
            </thead>
            <tbody>
                <?php $counts = 0; $n = 1; if($news): foreach($news as $new): ?>



                <tr id="listPost4411">
                    <th scope="row" class="text-center">
                     <?php echo $n; ?>                                                           
                 </th>
                 <td>
                    <ul class="media-list remove-margin">
                        <li class="media">
                            <div class="media-left">
                                <a data-pjax="0" href="<?php echo Url::to(['/news/view','id'=>$new->id]) ?>"> 
                                    <img style="width:100px" src="<?php echo \Yii::$app->params['mediaUrl'].'/'.$new->images?>" data-holder-rendered="true"> 
                                </a>
                            </div>
                            <div class="media-body">
                                <div class="head">
                                    <h4 class="media-heading post-index-h4" style="color:#333">
                                        <?php echo $new->title ?>                                             
                                    </h4>
                                </div>

                                <div class="content">
                                    <span class="cotentArt"><?php echo $new->description ?></span>
                                </div>
                                <div style="width: 100%;position: relative;border-top: 1px dashed #ddd;">
                                    <span class="post-index-fullname" style="margin-top: 5px;">

                                      <i class="fa fa-user" title="Tác giả" aria-hidden="true"></i>
                                      <?php echo $new->nameuser->username ?>

                                      | <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $new->created_at; ?> | 
                                      <i title="Lượt xem" class="iconType iconTypeLive" style="color:#449D44"><i class="fa fa-eye" aria-hidden="true"></i> 100</i>
                                      <br>
                                  </span>                                            
                              </div>

                              <div style="width: 100%;position: relative;">
                                <span class="post-index-fullname" style="margin-top: 5px;border:0px">
                                    <i class="fa fa-file-text-o" aria-hidden="true"></i> <?php $cat = $new->newnames; echo $cat['name']; ?> <br>
                                </span>
                            </div>

                        </div>
                    </li>
                </ul>

            </td>
            <td>
                <div class="btn-group" >
                    <button aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button">
                        <span class="glyphicon glyphicon-option-horizontal"></span>
                    </button>
                    <ul class="dropdown-menu" id="dropdown4421">                       
                        <li>
                            <a href="<?php echo Url::to(['/news/update','id'=>$new->id]) ?>" data-pjax="0" data-method="post">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Cập nhật</a>
                            </li>      
                            <li>
                                <a href="<?php echo Url::to(['/news/delete','id'=>$new->id]) ?>" data-pjax="0" data-method="post" data-confirm="Bạn chắc chắn xóa tin này?">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Xoá</a>
                                </li>  
                            </ul>
                        </div>
                    </td>
                </tr>  
                <?php $n++; endforeach;endif; ?>
            </tbody>

        </table>

        <div class="text-right pull-right">       
          <?php 
          echo LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </div>            
</div>
</div>
</div>            
</div>


