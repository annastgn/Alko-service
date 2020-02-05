<?php

use yii\db\Migration;

/**
 * Class m200203_083608_insert_test_data_to_drink_table
 */
class m200203_083608_insert_test_data_to_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('drink', ['id','name', 'minCost', 'maxCost', 'image', 'taste', 'idCategory'],[
                ['1', 'TORRES VINA ESMERALDA', '599', '1300', 'ESMERALDA.png', 'Терпкий', '1'],
                ['2','ANDRESEN PORTO WHITE 10 YEARS OLD', '399', '1000', 'ANDRESEN.png', 'Фруктовый', '3'],
                ['3','PORTO PRIME’S RUBY PORT ', '799', '1500', 'PORTO.png', 'Ореховый', '2']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200203_083608_insert_test_data_to_drink_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200203_083608_insert_test_data_to_drink_table cannot be reverted.\n";

        return false;
    }
    */
}
