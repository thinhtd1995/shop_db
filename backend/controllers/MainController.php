<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
  /**
   * 
   */
   class MainController extends Controller
   {
    
     public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        // 'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                            // 'matchCallback' => function ($rule, $action) {
                            //     $control = Yii::$app->controller->id;
                            //     $action = Yii::$app->controller->action->id;
                            //     $role = $control.'-'.$action;

                            //     if($control != 'site'){
                            //         return Yii::$app->user->can($role);
                            //     }else{
                            //         return true;
                            //     }
                            // }
                   
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

   } 
 ?>