<?php

namespace vl_anufriev\va_static_blocks\models;

use Yii;

/**
 * This is the model class for table "block".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $slug
 * @property string|null $body
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'block';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'body' => 'Body',
        ];
    }
}
