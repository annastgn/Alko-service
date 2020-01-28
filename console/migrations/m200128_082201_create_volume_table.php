<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%volume}}`.
 */
class m200128_082201_create_volume_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%volume}}', [
            'id' => $this->primaryKey(),
            'volume' => $this->double(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%volume}}');
    }
}
