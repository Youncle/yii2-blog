<?php

use yii\db\Migration;

/**
 * Class m181126_132433_update_post2
 */
class m181126_132433_update_post2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post','category',$this->string(100));
        $this->addColumn('post','photo',$this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('post','photo');
        $this->dropColumn('post','category');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181126_132433_update_post2 cannot be reverted.\n";

        return false;
    }
    */
}
