<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAssetLogin;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAssetLogin::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


            <!-- <section class="material-half-bg">
              <div class="cover"></div>
            </section> -->
            <section class="login-content">
                      <div class="login-box" style="padding-bottom: -80px;">
              <h3 class="login-head" style="margin-top: 20px;color: black;"><i class="fa fa-lg fa-fw fa-user"></i>ĐĂNG NHẬP</h3>
            <?= Alert::widget() ?>
            <?= $content ?>
            </div>
            </section>
     
    

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
