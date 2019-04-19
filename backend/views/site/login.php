<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

                <div class="login-box">
                <?php $form = ActiveForm::begin([
                        'options' => [
                            'class' => 'login-form',
                        ]
                    ]); ?>
                

               
                    <div class="form-group">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true,['placeholder' => 'Username']])->label('USERNAME',['class'=>'control-label']) ?>
                    </div>

                    <div class="form-group">
                         <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control',['placeholder' => 'Username']])->label('PASSWORD') ?>
                    </div>

                    <div class="form-group">
                        <?= $form->field($model, 'rememberMe')->checkbox() ?>
                    </div>
                        

          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>

            <?php ActiveForm::end(); ?>
        </div>