<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 */
class Category extends \yii\db\ActiveRecord
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
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Title',
        ];
    }

    public function getPost()
    {
        return $this->hasMany(Post::class, ['categoryId'=>'id']);
    }
}
