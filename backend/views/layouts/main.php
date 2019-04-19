<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\helpers\Url;
use backend\models\News;
AppAsset::register($this);
$host = 'http://'.$_SERVER['HTTP_HOST'];
$homeUrl = str_replace('/backend/web', '', Yii::$app->urlManager->baseUrl);
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
      <script>
        function homeUrl(){
          return '<?php echo $host.$homeUrl ;?>';
        }
     </script>
</head>
<body>
<?php $this->beginBody() ?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">    
              <a href="/"><img src="<?php echo \Yii::$app->params['mediaUrl'] ?>uploads/images/logovnpt.png"></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
          <!--   <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div> -->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Chức năng</h3>
                <ul class="nav side-menu">
               
                   <li><a><i class="fa fa-bars"></i> Quản lý tin tức <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo Html::a('Danh dách tin tức',['/news/index']) ?></li>
                      <li><?php echo Html::a('Thêm mới',['/news/create']) ?></li>
                      
                    </ul>
                  </li>
               
                   <li><a><i class="fa fa-picture-o" aria-hidden="true"></i> Quản lý sản phẩm <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo Html::a('Danh dách data',['/products/index']) ?></li>
                      <li><?php echo Html::a('Thêm mới',['/products/create']) ?></li>
                      
                    </ul>
                  </li>
             
                   <li><a><i class="fa fa-picture-o" aria-hidden="true"></i> Quản lý danh muc <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo Html::a('Danh dách danh mục',['/category/index']) ?></li>
                       <li><?php echo Html::a('Thêm mới',['/category/create']) ?></li>
                      
                    </ul>
                  </li>
                   <li><a><i class="fa fa-picture-o" aria-hidden="true"></i> Quản lý banner <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo Html::a('Danh dách banner',['/advertisement/index']) ?></li>
                       <li><?php echo Html::a('Thêm mới',['/advertisement/create']) ?></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user" aria-hidden="true"></i> Quản lý user <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo Html::a('Danh dách tài khoản',['/user/index']) ?></li>
                      <li><?php echo Html::a('Thêm mới',['/user/create']) ?></li>
                      
                    </ul>
                  </li>
                
                 
                </ul>
              </div>
              
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             <ul class="nav navbar-nav navbar-right">
                <?php if (!Yii::$app->user->isGuest): ?>
                  
                
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo Yii::$app->user->identity->username; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                    
                      <?php echo Html::a('Thông tin',['/user/view','id'=>Yii::$app->user->identity->id]); ?>
                    </li>
                     <li>
                       <?php echo Html::a('Đổi mật khẩu',['/change-password/index']); ?>
                    </li>
                    <li>
                        <?php echo Html::a('<i class="fa fa-sign-out pull-right"></i> Thoát',['/site/logout'],['data-method'=>'post']); ?>
                    </li>
                  </ul>
                </li>
                <?php else: ?>

                <?php endif ?>

                <li role="presentation" class="dropdown">
                
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    
  </body>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>
<!-- modal images detail -->
<div class="modal fade" id="modal-media-img">
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Thư viện ảnh</h4>
      </div>
      <div class="modal-body">
          <iframe src="<?php echo $host.$homeUrl ?>/filemanager/dialog.php?field_id=img_details" style="border: none;width: 100%;height: 500px" data-id="abc"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal images avatar -->
<div class="modal fade" id="modal-media-img-avatar">  
  <div class="modal-dialog  modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Thư viện ảnh</h4>
      </div>
      <div class="modal-body">
          <iframe src="<?php echo $host.$homeUrl ?>/filemanager/dialog.php?field_id=images" style="border: none;width: 100%;height: 500px" data-id="abc"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
  <?php 
      $new = News::find()->where(['status'=>1])->all();
      $arr_alug = [];
      foreach ($new as $news) {
        $arr_alug[] = $news->slug;
      }
   ?>
      var data_slug = <?php echo json_encode($arr_alug); ?>;
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
