<?php

use yii\db\Migration;

/**
 * Class m181203_133903_remove_comments
 */
class m181203_133903_remove_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropTable('comment');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181203_133903_remove_comments cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181203_133903_remove_comments cannot be reverted.\n";

        return false;
    }
    */
}
