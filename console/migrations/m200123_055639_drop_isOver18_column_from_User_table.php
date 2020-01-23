<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%User}}`.
 */
class m200123_055639_drop_isOver18_column_from_User_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('{{%User}}', 'isOver18');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addColumn('{{%User}}', 'isOver18', $this->boolean()->notNull());
    }
}
