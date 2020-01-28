<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%drink}}`.
 */
class m200128_075819_create_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%drink}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255)->notNull()->unique(),
            'minCost' => $this->money(),
            'maxCost' => $this->money(),
            'image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%drink}}');
    }
}
