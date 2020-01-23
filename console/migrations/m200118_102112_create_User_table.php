<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%User}}`.
 */
class m200118_102112_create_User_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%User}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255)->notNull(),
            'isOver18' => $this->boolean()->notNull(),
            'password'=>$this->char(255)->notNull(),
            'email'=>$this->char(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%User}}');
    }
}
