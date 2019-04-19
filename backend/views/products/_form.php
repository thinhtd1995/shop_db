<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

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
          <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
          <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
          <?= $form->field($model, 'description')->textarea(['maxlength' => true]) ?>
          <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>


          <?php 
          $cat = new Category;
          ?>
          <?= $form->field($model, 'cat_id')->dropDownList(
            $cat->getParent(0,'',2),
            [
              'prompt'=>'Danh mục cha'
            ]
          ) ?>


          <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>
          <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>


        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading" onclick="$('#seo-box').toggle()">
        <div class="panel-title">Thông tin seo <small>(bấm để mở)</small></div>
      </div>
      <div class="panel-body" style="display: block;" id="seo-box">
        <div class="col-md-12">
          <?= $form->field($model, 'title_seo')->textInput(['maxlength' => true,'onKeyDown'=>'CountLeft(this.form.title_seo, this.form.left_title_seo,300)','onKeyUp'=>'CountLeft(this.form.title_seo,this.form.left_title_seo,300)','id'=>'title_seo']) ?>
          <input readonly type="text" name="left_title_seo" size=3 maxlength=3 value="300" disabled="disabled" class="seo_details">
        </div>
        <div class="col-md-12">
          <?= $form->field($model, 'desc_seo')->textarea(['maxlength' => true,'onKeyDown'=>'CountLeft(this.form.desc_seo, this.form.left_desc_seo,300)','onKeyUp'=>'CountLeft(this.form.desc_seo,this.form.left_desc_seo,300)','id'=>'desc_seo']) ?>
          <input readonly type=dtext" name="left_desc_seo" size=3 maxlength=3 value="300" disabled="disabled" class="seo_details">

        </div>
        <div class="col-md-12">
          <?= $form->field($model, 'key_seo')->textarea(['maxlength' => true,'onKeyDown'=>'CountLeft(this.form.key_seo, this.form.left_key_seo,300)','onKeyUp'=>'CountLeft(this.form.key_seo,this.form.left_key_seo,300)','id'=>'key_seo']) ?>
          <input readonly type=dtext" name="left_key_seo" size=3 maxlength=3 value="300" disabled="disabled" class="seo_details">
        </div>

      </div>
    </div>
  </div>
</script>
<div class="col-md-3 col-xs-12">
 <div class="col-md-12">
  <div class="row x_panel tile">
    <div class="x_title">
      <h2>Hình ảnh</h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="col-md-12">
        <div class="tip-avatar">
          <img id="img-logo" name="img"  class="media-object tip-imgPreview" src="<?php echo \Yii::$app->params['mediaUrl'].'/'?><?php echo $avatar ?>" 
          data-src="holder.js/95x64" data-holder-rendered="true" width="200px">  
        </br>
        <span class="btn btn-success btn-file">
         Chọn file <input type="file" id="upload-logo" class="tip-images" name="LogoImage" value="" title="Chọn ảnh" accept="image/*" data-value="LogoImage" data-path="" data-crop="img-logo" data-crop-width="460" data-crop-height="300" data-validate="1" data-size="200">
       </span>


       <div class="form-group field-LogoImage required">
        <input type="hidden" value="<?php  echo $avatar  ?>" id="LogoImage" class="form-control" name="Products[images]">
        <div class="help-block"></div>
      </div>

    </div>
  </div>
</div>
</div>
</div>
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
          <input type="checkbox" data-value="status" name="Products[status]" value="1" <?php echo $model->status==1?'checked':''  ?> >                                   
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
