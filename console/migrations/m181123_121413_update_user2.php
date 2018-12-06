<?php

use yii\db\Migration;

/**
 * Class m181123_121413_update_user2
 */
class m181123_121413_update_user2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('user','PostNumber','postNumber');
        $this->renameColumn('user','CommentNumber','commentNumber');
        $this->addColumn('user','name',$this->string(100));

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user','name');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181123_121413_update_user2 cannot be reverted.\n";

        return false;
    }
    */
}
