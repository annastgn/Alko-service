<?php

use yii\db\Migration;

/**
 * Class m200201_075849_alter_column_name_from_drink_table
 */
class m200201_075849_alter_column_name_from_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('{{%drink}}', 'name', 'string');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200201_075849_alter_column_name_from_drink_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200201_075849_alter_column_name_from_drink_table cannot be reverted.\n";

        return false;
    }
    */
}
