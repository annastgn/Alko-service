<?php

use yii\db\Migration;

/**
 * Class m200203_081632_insert_test_data_to_category_table
 */
class m200203_081632_insert_test_data_to_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('category', ['id', 'name'],[
                ['1', 'Вино'],
                ['2', 'Ликер'],
                ['3', 'Пиво']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200203_081632_insert_test_data_to_category_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200203_081632_insert_test_data_to_category_table cannot be reverted.\n";

        return false;
    }
    */
}
