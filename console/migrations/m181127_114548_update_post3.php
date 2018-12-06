<?php

use yii\db\Migration;

/**
 * Class m181127_114548_update_category
 */
class m181127_114548_update_post3 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('post','categoryId',$this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user','categoryId');
    }

}
