<?php

namespace backend\models;
use yii\data\Pagination;
use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $cat_id
 * @property int $price
 * @property string $slug
 * @property string $content
 * @property string $title_seo
 * @property string $desc_seo
 * @property string $key_seo
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'cat_id', 'price', 'content'], 'required'],
            [['description', 'content', 'title_seo', 'desc_seo', 'key_seo'], 'string'],
            [['cat_id', 'price', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'slug','images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên sản phẩm',
            'images' => 'Hình ảnh',
            'description' => 'Mô tả ngắn',
            'cat_id' => 'Danh mục cha',
            'price' => 'Giá',
            'slug' => 'Đường dẫn tĩnh',
            'content' => 'Nội dung',
            'title_seo' => 'Title Seo',
            'desc_seo' => 'Desc Seo',
            'key_seo' => 'Key Seo',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
      public function getAllpro(){
        $cat_id = Yii::$app->request->get('cat_id'); 
        $keyword   = Yii::$app->request->get('namesearch','');
        $product = Products::find()->where(['like','name',$keyword])->OrderBy('id DESC');
          if($cat_id !=''){
             $cat = Category::find()->where(['parent'=>$cat_id])->andWhere(['status'=>1])->all();
             $cat_id = [];
             foreach ($cat as $cats) {
                 $cat_id[]=$cats->id;
             }
             $product->andWhere(['cat_id'=>$cat_id]);
          }
           
          $count = $product->count();
             $pages = new Pagination(['totalCount' => $count,'PageSize' => 20]);
             $product = $product->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

              $data = [
                  'pages' =>$pages,
                  'product' =>$product
              ];
              
        return $data;
    }
  
    public function getCatename(){
        return $this->hasOne(Category::className(),['id' => 'cat_id']);

    }
    public function checkslug($slug){
        $model = Products::findOne(['slug'=>$slug]);
   
        while (isset($model)) {
             $slug = $model->slug.'-'.'1';
             $model = Products::findOne(['slug'=>$slug]);
        }
      return $slug;
    }
}
