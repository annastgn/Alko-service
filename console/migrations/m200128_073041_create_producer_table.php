<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%producer}}`.
 */
class m200128_073041_create_producer_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%producer}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255)->notNull()->unique(),
            'country' => $this->char(255)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%producer}}');
    }
}
