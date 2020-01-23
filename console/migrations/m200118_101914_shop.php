<?php

use yii\db\Migration;

/**
 * Class m200118_101914_shop
 */
class m200118_101914_shop extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('shop', [
            'id' => $this->primaryKey(),
            'address' => $this->string(),
            'name' => $this->string(300),
            'scheduleSince' => $this->integer(4),
            'scheduleTill' => $this->integer(4),
            'availability' => $this->string(300),
            'priceMin' => $this->double(),
            'priceMax' => $this->double(),
            'drink_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('shop');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200118_101914_shop cannot be reverted.\n";

        return false;
    }
    */
}
