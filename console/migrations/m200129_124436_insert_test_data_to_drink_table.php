<?php

use yii\db\Migration;

/**
 * Class m200129_124436_insert_test_data_to_drink_table
 */
class m200129_124436_insert_test_data_to_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('drink', ['name', 'minCost', 'maxCost', 'image', 'taste'],[
                ['TORRES VINA ESMERALDA', '599', '1300', 'ESMERALDA.png', 'Терпкий'],
                ['ANDRESEN PORTO WHITE 10 YEARS OLD', '399', '1000', 'ANDRESEN.png', 'Фруктовый'],
                ['PORTO PRIME’S RUBY PORT ', '799', '1500', 'PORTO.png', 'Ореховый']
            ]
            );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200129_124436_insert_test_data_to_drink_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200129_124436_insert_test_data_to_drink_table cannot be reverted.\n";

        return false;
    }
    */
}
