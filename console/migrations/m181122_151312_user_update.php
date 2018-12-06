<?php

use yii\db\Migration;

/**
 * Class m181122_151312_user_update
 */
class m181122_151312_user_update extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user','birthday', $this->integer(11));
        $this->addColumn('user', 'PostNumber',$this->smallInteger());
        $this->addColumn('user','CommentNumber', $this->smallInteger());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

       $this->dropColumn('user','CommentNumber');
       $this->dropColumn('user','PostNumber');
       $this->dropColumn('user','birthday');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181122_151312_user_update cannot be reverted.\n";

        return false;
    }
    */
}
