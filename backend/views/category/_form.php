<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
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
          <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

          <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
          <?php 
          $cat = new Category;
          ?>
          <?= $form->field($model, 'parent')->dropDownList(
            $cat->getParent(0,'',[1,2]),
            [
              'prompt'=>'Danh mục cha'
            ]
          ) ?>
          <?= $form->field($model, 'type')->dropDownList(
            [
             '1'=>'Danh mục tin tức',
             '2'=>'Danh mục sản phẩm',
           ]
         ) ?> 
         <?= $form->field($model, 'sort')->textInput(['maxlength' => true]) ?>


         <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>

       </div>
     </div>
   </div>
   <div class="panel panel-default">
      <div class="panel-heading" onclick="$('#seo-box').toggle()">
        <div class="panel-title">Thông tin seo <small>(bấm để mở)</small></div>
      </div>
      <div class="panel-body" style="display: block;" id="seo-box">
        <div class="col-md-12">
          <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true]) ?>
        </div>
        
        <div class="col-md-12">
          <?= $form->field($model, 'desc_seo')->textarea(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
          <?= $form->field($model, 'key_seo')->textarea(['maxlength' => true]) ?>
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
              <input type="checkbox" data-value="status" name="Category[status]" value="1" <?php echo $model->status==1?'checked':''  ?> >                                   
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
