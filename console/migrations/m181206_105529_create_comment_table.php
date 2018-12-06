<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comment`.
 */
class m181206_105529_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer(11),
            'postId' => $this->integer(11),
            'author' => $this->string(100),
            'body' => $this->text(),
            'createdAt' => $this->integer(),
            'updatedAt' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comment');
    }
}
