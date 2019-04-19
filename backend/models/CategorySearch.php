<?php

namespace backend\models;

use Yii;

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
class CategorySearch extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['name', 'parent', 'link', 'slug', 'sort', 'desc_seo', 'title_seo', 'key_seo', 'type', 'status', 'created_at', 'updated_at'], 'required'],
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
            'name' => 'Name',
            'parent' => 'Parent',
            'link' => 'Link',
            'slug' => 'Slug',
            'sort' => 'Sort',
            'desc_seo' => 'Desc Seo',
            'title_seo' => 'Title Seo',
            'key_seo' => 'Key Seo',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
