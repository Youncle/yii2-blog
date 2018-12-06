<?php

use yii\db\Migration;

/**
 * Class m181126_154233_create_comments
 */
class m181126_154233_create_comments extends Migration
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
        $this->dropTable('comment');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181126_154233_create_comments cannot be reverted.\n";

        return false;
    }
    */
}
