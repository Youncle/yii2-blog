<?php

namespace backend\models;

use yii\base\Model;
use common\models\base\Post;
use yii\web\UploadedFile;

/**
 * This is the form class for "post".
 *
 * @property int $id
 * @property int $userId
 * @property int $categoryId
 * @property int $commentId
 * @property int $isValidComment
 * @property string $title
 * @property string $slug
 * @property string $photo
 * @property string $content
 */


class PostForm extends Model
{
    public $id;
    public $userId;
    public $categoryId;
    public $commentId;
    public $title;
    public $slug;
    public $content;
    public $photo;
    public $isValidComment;
    public $imageFile;
    public $post= null;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id','userId','categoryId','commentId','isValidComment'],'integer'],
            [['imageFile'],'file','skipOnEmpty'=>true, 'extensions'=>'png,jpg,jpeg'],
            [['content','title','slug'], 'string'],
            [['photo'], 'string', 'max' => 255],
        ];
    }

public function create()
{
    if ($this->validate()) {

        $this->imageFile = UploadedFile::getInstance($this, 'imageFile');

        if ($this->imageFile) {
            $this->photo = $this->title. '.' .$this->imageFile->extension;
            $this->imageFile->saveAs('@uploadPhoto/' . $this->photo);
        }


    $model = new Post();
    $model->id = $this->id;
    $model->userId = $this->userId;
    $model->categoryId = $this->categoryId;
    $model->commentId = $this->commentId;
    $model->isValidComment = $this->isValidComment;
    $model->title = $this->title;
    $model->slug = $this->slug;
    $model->photo = $this->photo;
    $model->content = $this->content;

    }

    if (!$model->save())
    {
        return null;
    }

    return $model;
}

    public function update()
    {
        if ($this->validate()) {

            $this->imageFile = UploadedFile::getInstance($this, 'imageFile');

            if ($this->imageFile) {
                $this->photo = 'uploads/' . $this->title. '.' .$this->imageFile->extension;
                $this->imageFile->saveAs($this->photo);
            }


            $model = new Post();
            $model->id = $this->id;
            $model->userId = $this->userId;
            $model->categoryId = $this->categoryId;
            $model->title = $this->title;
            $model->slug = $this->slug;
            $model->photo = $this->photo;
            $model->content = $this->content;

        }

        if (!$model->save())
        {
            return null;
        }

        return $model;
    }

}
