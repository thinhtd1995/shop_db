<?php

namespace backend\controllers;

use Yii;
use backend\models\Products;
use backend\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\services\BaseService;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function actionIndex()
    {
        $product = new Products;
        $data = $product->getAllpro();

        return $this->render('index', [
            'product' => $data['product'],
            'pages' => $data['pages'],
        ]);
    }

    /**
     * Displays a single Product model.
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        $base = new BaseService();
        $post = Yii::$app->request->post();
        if ($model->load(Yii::$app->request->post())) {
            $model->slug = $model->checkslug($model->slug);
            $base->saveData($model,$post,'Products');
            $model->created_at = date('Y-m-d H:i:s');
            $model->updated_at = date('Y-m-d H:i:s');
            if(empty($post['Products']['status'])){
                $model->status = 0;
            }
            if($model->save(false)){
              return $this->redirect(['index']);
            }
        }
      
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $base = new BaseService();
        $slug_old =  $model->slug;
        $post = Yii::$app->request->post();
        if ($model->load(Yii::$app->request->post())) {
            if($slug_old != $model->slug){
               $model->slug = $model->checkslug($model->slug);
            }
            $base->saveData($model,$post,'Products');
            $model->updated_at = date('Y-m-d H:i:s');
            if(empty($post['Products']['status'])){
                $model->status = 0;
            }
            if($model->save()){
              return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
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
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
