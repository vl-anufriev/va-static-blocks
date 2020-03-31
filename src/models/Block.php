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
     * @param $slug
     * @return array|string|Block|\yii\db\ActiveRecord|null
     */
    public static function getBlockBySlug($slug)
    {
        if (empty(trim($slug))) return '';
        return Block::find()->where(['slug' => $slug])->one();
    }

    /**
     * @param $id
     * @return array|string|Block|\yii\db\ActiveRecord|null
     */
    public static function getBlockById($id)
    {
        if (empty(trim($id))) return '';
        if (!is_numeric($id)) return '';
        return Block::find()->where(['id' => $id])->one();
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['title', 'slug'], 'string', 'max' => 255],
            ['slug', 'match', 'pattern' => '/^[a-z]+$/',
                'message' => 'Поле может содержать только латинские буквы'
            ],
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
