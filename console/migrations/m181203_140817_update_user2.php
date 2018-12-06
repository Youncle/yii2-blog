<?php

use yii\db\Migration;

/**
 * Class m181203_140817_update_user
 */
class m181203_140817_update_user2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('user','postNumber');
        $this->dropColumn('user','commentNumber');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('user','commentNumber', $this->integer());
        $this->addColumn('user','postNumber', $this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181203_140817_update_user cannot be reverted.\n";

        return false;
    }
    */
}
