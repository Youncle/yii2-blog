<?php

use yii\db\Migration;

/**
 * Class m181126_142158_create_category
 */
class m181126_142158_create_category extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
            $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100),
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('category');
    }

}
