<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%Comment}}`.
 */
class m200118_102802_create_Comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%Comment}}', [
            'id' => $this->primaryKey(),
            'content' => $this->text()->notNull(),
            'date'=>$this->date()->notNull(),
            'userId'=>$this->integer()->notNull(),
            'drinkId'=>$this->integer()->notNull(),
        ]);

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-Comment-userId',
            'Comment',
            'userId',
            'User',
            'id',
            'CASCADE'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-Comment-drinkId',
            'Comment',
            'drinkId',
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
        $this->dropTable('{{%Comment}}');
    }
}
