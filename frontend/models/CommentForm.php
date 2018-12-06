<?php

namespace frontend\models;

use yii\base\Model;
use common\models\base\Post;
use common\models\base\Comment;
use Yii;

/**
 * This is the form class for "post".
 *
 * @property int $postId
 * @property int $isValidComment
 * @property string $title
 * @property string $slug
 * @property string $photo
 * @property string $content
 */


class CommentForm extends Model
{
    protected $_post;
    public $postSlug;
    public $author;
    public $body;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author','body'],'required'],
            [['author','body'], 'string'],

        ];
    }

    /**
     * Load, validate & create comment
     * @return bool
     */
    public function create()
    {
        $this->load(Yii::$app->request->post());

        if ($this->validate()) {
            return $this->save();
        }

        return false;
    }

    /**
     * Create comment
     * @return bool
     */
    public function save()
    {
        $this->post = Post::findOne(['slug' => $this->postSlug]);

        if (empty($this->post)) {
            return false;
        }

        $comment = new Comment;
        $comment->author = $this->author;
        $comment->body = $this->body;

        $comment->postId = $this->post->id;

        if (!$comment->save()) {
            return false;
        }

        return true;

    }

    public function getPost()
    {
        return $this->_post;
    }

    public function setPost($post)
    {
        return $this->_post = $post;
    }

}
