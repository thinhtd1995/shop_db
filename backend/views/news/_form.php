<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Category;

// use wbraganca\tagsinput\TagsinputWidget;
// composer require life2016/yii2-tagsinput

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form yii\widgets\ActiveForm */
$avatar  = ($model->images !='')? $model->images :'images/noImg.png';
?>


<style type="text/css">
  
 .field-news-keywords label,.field-news-keywords input,.bootstrap-tagsinput{width: 100%}
</style>

<div class="news-form">


    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>
    <div class="col-md-9 col-xs-12 col form-left">
        <div class="panel panel-default">
          <div class="panel-heading">
               <?php if($model->isNewRecord): ?>
                 <h3 class="panel-title">Thêm mới</h3>
               <?php else: ?>
                 <h3 class="panel-title">Cập nhật tin : <?php echo $model->title ?></h3>
              <?php endif; ?>
          </div>



          <div class="panel-body">
                <div class="col-md-12">
                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-12">
                  <?php 
                        $cat = new Category;
                  ?>
                  <?= $form->field($model, 'cat_id')->dropDownList(
                        $cat->getParent(0,'',1),
                        [
                            'prompt'=>'Danh mục cha'
                        ]
                    ) ?>
                </div>
                <div class="col-md-12">
                     <?= $form->field($model, 'description')->textarea(['id' =>'desc']) ?>
                </div>
                <div class="col-md-12">
                      <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>
                    
                </div>
               
                <div class="col-md-12">

                       <?= $form->field($model, 'created_at')->hiddenInput()->label(false) ?>
                </div>
   
                <div class="col-md-6">
                  
                   <?= $form->field($model, 'user_id')->hiddenInput()->label(false) ?>
                </div>
                
              </div>
          </div>
    


                 <!-- videos -->
             

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
                                <input type="hidden" value="<?php echo $avatar  ?>" id="LogoImage" class="form-control" name="News[images]">
                                <div class="help-block"></div>
                            </div>

                        </div>
                  </div>
                  </div>
              </div>
           </div>


           <div class="col-md-12">

              <div class="row x_panel tile">
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
                                  <input type="checkbox" data-value="status" name="News[status]" value="1" <?php echo $model->status==1?'checked':''  ?> >                                   
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


           <div class="col-md-12">

              <div class="row x_panel tile">
                <div class="x_title">
                  <h2>Tùy chọn</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
               
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <?php
                  echo Html::submitButton('<i class="fa fa-save" aria-hidden="true"></i> Lưu', ['class' => 'btn btn-primary btn-sm  btn-block']);
                 echo Html::a('<i class="fa fa-ban" aria-hidden="true"></i> Hủy', ['index'], ['class' => 'btn btn-danger btn-sm btn-block']);
               ?>
             

                </div>
              </div>

           </div>



        </div>



        <script src="js/jquery.min.js"></script>

    <?php ActiveForm::end(); ?>

</div>
