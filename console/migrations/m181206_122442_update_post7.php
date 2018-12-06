<?php

use yii\db\Migration;

/**
 * Class m181206_122442_update_post7
 */
class m181206_122442_update_post7 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post','commentId', $this->integer(11));
        $this->addColumn('post','isValidComment', $this->integer(11));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post','isValidComment');
        $this->dropColumn('post','commentId');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181206_122442_update_post7 cannot be reverted.\n";

        return false;
    }
    */
}
