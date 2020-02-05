<?php

use yii\db\Migration;

/**
 * Class m200203_082626_delete_test_data_from_drink_table
 */
class m200203_082626_delete_test_data_from_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->delete('drink', ['id' => [2, 3, 4]]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200203_082626_delete_test_data_from_drink_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200203_082626_delete_test_data_from_drink_table cannot be reverted.\n";

        return false;
    }
    */
}
