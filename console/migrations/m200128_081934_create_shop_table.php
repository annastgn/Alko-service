<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%shop}}`.
 */
class m200128_081934_create_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%shop}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255)->notNull(),
            'address' => $this->string()->notNull(),
            'scheduleSince' => $this->time(),
            'scheduleTill' => $this->time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%shop}}');
    }
}
