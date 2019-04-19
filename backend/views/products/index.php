<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use backend\models\CateData;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách sản phẩm';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

  <div class="panel panel-default">
   <div class="panel-heading">
    <h4 class="panel-title pull-left"><?= Html::encode($this->title) ?></h4>
     <button onclick="$('#search').toggle()" class="btn btn-default btn-sm pull-right" style="margin-left: 10px" title="Tìm kiếm"><i class="fa fa-search"></i></button>

    <a href="<?php echo Url::to(['/products/create']); ?>" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> Thêm mới</a>

    <div class="clearfix"></div>

  </div>
  <div class="panel-body">
   <div id="search" style="display: none">

    <div class="news-search">

      <?php $form = ActiveForm::begin([
        'id' => 'form-main-search',
        'method' => 'GET',
        'action'=> ['/products/index'],
      ]); ?>  
      <div class="row">
        <div class="col-md-6">
          <div class="form-group field-news-title">

            <input type="text" id="news-title" class="form-control" name="namesearch" placeholder="Từ khóa tìm kiếm">

            <div class="help-block"></div>
          </div>    
        </div>   

        <div class="col-md-4">  
          <select class="form-control" name="cat_id">
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


  <table class="table table-bordered table-hover">
   <thead>
     <tr>
       <th>STT</th>
       <th>Hình ảnh</th>
       <th>Tên sản phẩm</th>
       <th>Giá</th>
       <th>Trạng thái</th>
       <th></th>

     </tr>
   </thead>
   <tbody>
     <?php $n=1; if($product){ foreach ($product as $products) { ?>
       <tr>
         <td><?php echo $n; ?></td>
         <td>
          <img src="<?php echo $products->images; ?>" class="img-responsive" width="80px" alt="Image">
         </td>
         <td>
           <span class="label label-success"><?php echo $products->catename->name; ?></span>
         </td>
         <td><?php echo $products->price; ?></td>
         <td><?php echo $products->status; ?></td>


         <td>
           <div class="dropdown">
            <button class="btn btn-xs btn-success dropdown-toggle" type="button" data-toggle="dropdown">Tuỳ chọn 
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="<?php echo Url::to(['/products/update','id'=>$products->id]) ?>">
                  <i class="fa fa-edit" aria-hidden="true"></i> Cập nhật</a></li>
                  <li><a href="<?php echo Url::to(['/products/delete','id'=>$products->id]) ?>" data-pjax="0" data-method="post" data-confirm="Bạn chắc chắn xóa tin này?">
                    <i class="fa fa-trash-o" aria-hidden="true"></i> Xoá</a></li>
                  </ul>
                </div>
              </td>

            </tr>
            <?php $n++;}} ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  <style type="text/css">
  td{
    text-align: center;

    padding-top: 12px !important;
  }
</style>
