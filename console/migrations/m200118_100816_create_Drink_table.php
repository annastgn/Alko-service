<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Drink}}`.
 */
class m200118_100816_create_Drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Drink}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'strength' => $this->double()->notNull(),
            'rate' => $this->integer(),
            'shelfLife' => $this->integer(),
            'minCost' => $this->money()->notNull(),
            'maxCost' => $this->money()->notNull(),
            'producerId' => $this->integer()->notNull(),
            'typeId' => $this->integer()->notNull(),
        ]);

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-Drink-producerId',
            'Drink',
            'producerId',
            'Producer',
            'id',
            'CASCADE'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-Driink-typeId',
            'Drink',
            'typeId',
            'TypeDrink',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%Drink}}');
    }
}
