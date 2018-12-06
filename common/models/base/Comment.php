<?php

namespace common\models\base;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property int $userId
 * @property int $postId
 * @property string $author
 * @property string $body
 * @property int $createdAt
 * @property int $updatedAt
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'postId', 'createdAt', 'updatedAt'], 'integer'],
            [['body'], 'string'],
            [['author'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'postId' => 'Post ID',
            'author' => 'Author',
            'body' => 'Body',
            'createdAt' => 'Created At',
            'updatedAt' => 'Updated At',
        ];
    }

    public function getPost()
    {
        return $this->hasOne(Post::class, ['id'=>'postId']);
    }
}
