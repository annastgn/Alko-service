<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Brand}}`.
 */
class m200128_055016_create_Brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Brand}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Brand}}');
    }
}
