<?php

namespace backend\models;

use Yii;
use yii\data\Pagination;
use backend\services\BaseService;
date_default_timezone_set("Asia/Vientiane");
/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property string $images
 * @property int $cat_id
 * @property int $user_id
 * @property string $desc_seo
 * @property string $title_seo
 * @property int $status
 * @property int $public
 * @property string $created_at
 * @property string $updated_at
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'description', 'content', 'images', 'cat_id', 'status', 'type'], 'required'],
            [['description', 'content', 'desc_seo', 'title_seo','key_seo'], 'string'],
            [['cat_id', 'user_id', 'status', 'type'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug', 'images'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Tiêu đề',
            'slug' => 'Đường dẫn tĩnh',
            'description' => 'Mô tả',
            'content' => 'Nội dung',
            'images' => 'Hình ảnh',
            'cat_id' => 'Danh mục cha',
            'user_id' => 'Tài khoản đăng ký',
            'desc_seo' => 'Mô tả seo',
            'title_seo' => 'Tiêu đề seo',
            'key_seo' => 'Keyword seo',
            'status' => 'Trạng thai',
            'type' => 'Kiều tin',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
    public function saveData($model, $post) {
        $base = new BaseService();
        if ($model->images != null && $model->images != "") {
            $string_img = $post["News"]["images"];
            $filename = $base->uploadBase64("uploads/images/", $string_img, 555, 415);
            if ($filename) {
                $model->images = $filename;
            }
        }
        return 0;
    }
    public function getNewnames(){
        return $this->hasOne(Category::className(),['id' => 'cat_id']);

    }
    public function getNameuser(){
        return $this->hasOne(User::className(),['id' => 'user_id']);

    }
    public function checkslug($slug){
        $model = News::findOne(['slug'=>$slug]);
        while (isset($model)) {
             $slug = $model->slug.'-'.'1';
             $model = News::findOne(['slug'=>$slug]);
        }
      return $slug;
    }
   
}
