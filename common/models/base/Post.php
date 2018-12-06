<?php

namespace common\models\base;


use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;
use yii\behaviors\SluggableBehavior;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $userId
 * @property int $categoryId
 * @property int $commentId
 * @property string $title
 * @property string $slug
 * @property string $photo
 * @property string $content
 * @property int $isValidComment
 * @property int $createdAt
 * @property int $updatedAt
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public $imageFile;

    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'createdAt',
                'updatedAtAttribute' => 'updatedAt'
            ],
            [
                'class' => SluggableBehavior::class,
                'attribute' => 'title',
                'immutable' => true,
                'ensureUnique' => true,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'categoryId', 'commentId','isValidComment','createdAt', 'updatedAt'], 'integer'],
            [['imageFile'],'file','skipOnEmpty'=>true, 'extensions'=>'png,jpg,jpeg'],
            [['content'], 'string'],
            [['title','slug','photo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User',
            'categoryId' => 'Category',
            'commentId' => 'Comment',
            'title' => 'Title',
            'imageFile' => 'Photo',
            'content' => 'Content',
            'isValidComment' => 'Allow comment',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public function getPreview()
    {
        $words= 70;

        if (StringHelper::countWords($this->content) > $words)
        {
            return StringHelper::truncateWords($this->content,$words);
        }
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id'=>'userId']);
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id'=>'categoryId']);
    }

    public function getComment()
    {
        return $this->hasMany(Comment::class, ['postId'=>'id']);
    }
}
