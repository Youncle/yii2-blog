<?php

use yii\db\Migration;

/**
 * Class m181128_105337_update_post6
 */
class m181128_105337_update_post6 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post','slug', $this->string(100));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post','slug');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181128_105337_update_post6 cannot be reverted.\n";

        return false;
    }
    */
}
