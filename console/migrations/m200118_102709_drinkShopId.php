<?php

use yii\db\Migration;

/**
 * Class m200118_102709_drinkShopId
 */
class m200118_102709_drinkShopId extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('drinkShopId', [
            'id' => $this->primaryKey(),
            'shop_id' => $this->integer()->notNull(),
            'drink_id' => $this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-drinkShopId-shop_id',
            'drinkShopId',
            'shop_id',
            'shop',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-drinkShopId-drink_id',
            'drinkShopId',
            'drink_id',
            'Drink',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('drinkShopId');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200118_102709_drinkShopId cannot be reverted.\n";

        return false;
    }
    */
}
