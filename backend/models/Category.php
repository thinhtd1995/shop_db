<?php

namespace backend\models;

use Yii;
use yii\data\Pagination;
/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property int $parent
 * @property string $link
 * @property string $slug
 * @property int $sort
 * @property string $desc_seo
 * @property string $title_seo
 * @property string $key_seo
 * @property int $type
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    private $_cats = [];
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'parent', 'link', 'slug', 'sort',  'type', 'status'], 'required'],
            [['parent', 'sort', 'type', 'status'], 'integer'],
            [['desc_seo', 'title_seo', 'key_seo'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'link', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tên danh mục',
            'parent' => 'Danh mục cha',
            'link' => 'Link',
            'slug' => 'Đường dẫn tĩnh',
            'sort' => 'Sắp xếp',
            'desc_seo' => 'Desc Seo',
            'title_seo' => 'Title Seo',
            'key_seo' => 'Key Seo',
            'type' => 'Type',
            'status' => 'Trạng thái',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
     public function getParent($parent=0,$leval='',$type){

        $data = Category::find()->where(['parent'=>$parent])->andWhere(['type'=>$type])->all();
        $leval .='-- ';
        if($data):
            foreach($data as $item):
                if ($item->parent == 0) {
                    $leval = '';
                }
                $this->_cats[$item->id] = $leval.$item->name;
                $this->getParent($item->id,$leval,$type);
                endforeach;
            endif;
        return $this->_cats;
    }


    public function getAllCategory(){
        $cat_id = Yii::$app->request->get('cat_id'); 
        $keyword   = Yii::$app->request->get('namesearch','');
        $cate = Category::find()->where(['like','name',$keyword])->OrderBy('id DESC');

          if($cat_id !=''){
             $cate->andWhere(['parent'=>$cat_id])->all();
          }
           
              $count = $cate->count();
                 $pages = new Pagination(['totalCount' => $count,'PageSize' => 20]);
                 $cate = $cate->offset($pages->offset)
                ->limit($pages->limit)
                ->all();

                  $data = [
                      'pages' =>$pages,
                      'cate' =>$cate
                  ];
              
        return $data;
    }
    public function getCatename(){
        return $this->hasOne(Category::className(),['id' => 'parent']);

    }
}
