<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m200209_091645_users_table
 */
class m200209_091645_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200209_091645_users_table cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('users', [
            'id' => Schema::TYPE_PK,
            'login' => Schema::TYPE_STRING,
            'name' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING
        ]);
    }

    public function down()
    {
        echo "m200209_091645_users_table cannot be reverted.\n";

        return false;
    }
    
}
