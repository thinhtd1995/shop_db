<?php

namespace backend\models;

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
class ProductsSearch extends \yii\db\ActiveRecord
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
            [['name', 'description', 'cat_id', 'price', 'slug', 'content', 'title_seo', 'desc_seo', 'key_seo', 'status', 'created_at', 'updated_at'], 'required'],
            [['description', 'content', 'title_seo', 'desc_seo', 'key_seo'], 'string'],
            [['cat_id', 'price', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'price' => 'Price',
            'slug' => 'Slug',
            'content' => 'Content',
            'title_seo' => 'Title Seo',
            'desc_seo' => 'Desc Seo',
            'key_seo' => 'Key Seo',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
