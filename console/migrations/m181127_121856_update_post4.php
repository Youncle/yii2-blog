<?php

use yii\db\Migration;

/**
 * Class m181127_121856_update_post4
 */
class m181127_121856_update_post4 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('post','category');
        $this->dropColumn('post','commentId');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->addColumn('post','commentId', $this->integer());
       $this->addColumn('post','category', $this->string(100));
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181127_121856_update_post4 cannot be reverted.\n";

        return false;
    }
    */
}
