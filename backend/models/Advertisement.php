<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "advertisement".
 *
 * @property int $id
 * @property string $images
 * @property int $orders_sort
 * @property string $link
 * @property int $type
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 */
class Advertisement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advertisement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['images','type'], 'required'],
            [['orders_sort', 'type', 'status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['images', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'images' => 'Hình ảnh',
            'orders_sort' => 'Sắp xếp',
            'link' => 'Đường dẫn',
            'type' => 'Chọn kiểu banner',
            'status' => 'Trạng thái',
            'created_at' => 'Ngày tạo',
            'updated_at' => 'Ngày cập nhật',
        ];
    }
}
