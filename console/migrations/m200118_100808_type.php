<?php

use yii\db\Migration;

/**
 * Class m200118_100808_type
 */
class m200118_100808_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('type', [
            'id' => $this->primaryKey(),
            'exposure' => $this->integer(4),
            'class' => $this->string(300),
            'taste' => $this->string(300),
            'aroma' => $this->string(300),
            'temperature' => $this->double(),
            'grapeSort' => $this->string(300),
            'color' => $this->string(300),
            'sugarAmount' => $this->string(300),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('type');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200118_100808_type cannot be reverted.\n";

        return false;
    }
    */
}
