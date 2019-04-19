<?php

namespace backend\controllers;

use Yii;
use backend\models\News;
use backend\models\NewsSearch;
use backend\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;
use backend\services\BaseService;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends MainController
{
    /**
     * {@inheritdoc}
     */

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if(!Yii::$app->user->isGuest){
            $news = News::find()->where(['status'=>1])->OrderBy('id DESC');
        }
        $user = User::find()->all();
        $count = $news->count();
        $pages = new Pagination(['totalCount' => $count,'PageSize' => 20]);
          $news = $news->offset($pages->offset)
          ->limit($pages->limit)
          ->all();

            $data = [
                'pages' =>$pages,
                'news' =>$news
            ];
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'news' => $data['news'],
            'pages' => $data['pages'],
            'user' => $user,
            'count' => $count,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        $base = new BaseService();
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            $base->saveData($model,$post,'News');
            $model->slug = $model->checkslug($model->slug);
            $model->created_at = date('Y-m-d');
            $model->updated_at = date('Y-m-d');

            if(empty($post['News']['status'])){
                $model->status = 0;
            }
            if(!Yii::$app->user->isGuest){
                $model->user_id = Yii::$app->user->identity->id;
            }

            if($model->save(false)){
               return $this->redirect(['index']);
            }
            else{
                Yii::$app->session->addFlash('success','Tạo mới không thành công');
                return $this->render('create', [
                'model' => $model,
            ]);
            }
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
       $model = $this->findModel($id);
       $slug_old = $model->slug;
        if ($model->load(Yii::$app->request->post())) {
            $post = Yii::$app->request->post();
            if($slug_old != $model->slug){
                $model->slug = $model->checkslug($model->slug);
            }
            $model->saveData($model,$post);

            $model->updated_at = date('Y-m-d');
 
            if(empty($post['News']['status'])){
                $model->status = 0;
            }
            if(!Yii::$app->user->isGuest){
                $model->user_id = Yii::$app->user->identity->id;
            }
            if( $model->save(false)){
                   return $this->redirect(['index']);       
            }
          
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
     public function actionSearch(){
        $cate_name = Yii::$app->request->get('cat_name'); 
        $keyword   = Yii::$app->request->get('namesearch','');
        $news = News::find()->where(['status'=>1])->andWhere(['like','title',$keyword])->OrderBy('id DESC');

          if($cate_name>0){
             $news->andWhere(['cat_id'=>$cate_name]);
          }
           
              $count = $news->count();
                 $pages = new Pagination(['totalCount' => $count,'PageSize' => 20]);
                 $news = $news->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

                  $data = [
                      'pages' =>$pages,
                      'news' =>$news
                  ];
              return $this->render('index',[
            'news' => $data['news'],
            'pages' => $data['pages'],
            'count' => $count,
              ]);
          
         
       }
}
