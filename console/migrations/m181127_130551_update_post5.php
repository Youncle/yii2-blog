<?php

use yii\db\Migration;

/**
 * Class m181127_130551_update_post5
 */
class m181127_130551_update_post5 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('post','author');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('post','author', $this->string());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181127_130551_update_post5 cannot be reverted.\n";

        return false;
    }
    */
}
