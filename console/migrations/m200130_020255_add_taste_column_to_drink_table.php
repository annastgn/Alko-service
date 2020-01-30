<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%drink}}`.
 */
class m200130_020255_add_taste_column_to_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%drink}}', 'taste', $this->char(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%drink}}', 'taste');
    }
}
