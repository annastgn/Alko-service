<?php

use yii\db\Migration;

/**
 * Class m200118_095930_producer
 */
class m200118_095930_producer extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('producer', [
            'id' => $this->primaryKey(),
            'country' => $this->string(100),
            'brand' => $this->string(300),
        ]);


    }



    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('producer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200118_095930_producer cannot be reverted.\n";

        return false;
    }
    */
}