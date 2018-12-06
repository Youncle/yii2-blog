<?php

use yii\db\Migration;

/**
 * Class m181123_111545_post_table
 */
class m181123_111545_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
        'id' => $this->primaryKey(),
        'userId' => $this->integer(11),
        'commentId' => $this->integer(11),
        'title' => $this->string(100),
        'author' => $this->string(100),
        'content' => $this->text(),
        'createdAt' => $this->integer(),
        'updatedAt' => $this->integer(),
    ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181123_111545_post_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_111545_post_table cannot be reverted.\n";

        return false;
    }
    */
}
