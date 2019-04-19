<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Menu;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
$avatar  = ($model->images !='')? $model->images :'images/noImg.png';
?>

<div class="product-form">


  <?php $form = ActiveForm::begin(); ?>
  <div class="col-md-9 col-xs-12 col form-left">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><?php echo Html::encode($this->title) ?></h3>
      </div>
      <div class="panel-body">
        <div class="col-md-12 col-xs-12">

          <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

          <?= $form->field($model, 'orders_sort')->textInput(['maxlength' => true]) ?>
          <?= $form->field($model, 'type')->dropDownList(
            [
             '1'=>'Banner header',
             '2'=>'Banner right',
             '3'=>'Banner danh mục tin',
             '4'=>'Logo',
           ]
         ) ?>
         

         <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>
         <div class="col-md-12">
           <?= $form->field($model,'images')->hiddenInput(['id'=>'images'])->label(false) ?>
           <a href="#" id="select_img_avatar" title="Chọn hình ảnh" class="" >
            <img src=" <?php echo $avatar?>" id="show_img_avatar" class="img-responsive">
            
          </a>
        </div>

      </div>
    </div>
  </div>
  
</div>


<div class="col-md-3 col-xs-12">
  <div class="x_panel tile">
    <div class="x_title">
      <h2>Tùy chọn</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <label class="control-label" >Chọn trạng thái</label>
      <div class="item-switch">

        <label class="switch">
          <span class="switch-inside">
            <input type="checkbox" data-value="status" name="Advertisement[status]" value="1" <?php echo $model->status==1?'checked':''  ?> >                                   
            <div class="slider round"></div>    
          </span>
          <span style="margin-left: 50px;display: inline-block;width: 150px;">Kích hoạt</span>
        </label>  
        <div class="form-group field-news_images">


         <div class="help-block"></div>
       </div>
     </div>

   </div>
 </div>
</div>

<div class="col-md-3 col-xs-12">
  <div class="x_panel tile">
    <div class="x_title">
      <h2>Tùy chọn</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
     <?php echo Html::submitButton('<i class="fa fa-save" aria-hidden="true"></i> Lưu', ['class' => 'btn btn-primary btn-sm  btn-block']);
     
     echo Html::a('<i class="fa fa-ban" aria-hidden="true"></i> Hủy', ['index'], ['class' => 'btn btn-danger btn-sm btn-block']);

     
     ?>
   </div>
 </div>
</div>

<?php ActiveForm::end(); ?>

</div>
