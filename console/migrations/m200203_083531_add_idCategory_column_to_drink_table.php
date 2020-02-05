<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%drink}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%category}}`
 */
class m200203_083531_add_idCategory_column_to_drink_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%drink}}', 'idCategory', $this->integer()->notNull());

        // creates index for column `idCategory`
        $this->createIndex(
            '{{%idx-drink-idCategory}}',
            '{{%drink}}',
            'idCategory'
        );

        // add foreign key for table `{{%category}}`
        $this->addForeignKey(
            '{{%fk-drink-idCategory}}',
            '{{%drink}}',
            'idCategory',
            '{{%category}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%category}}`
        $this->dropForeignKey(
            '{{%fk-drink-idCategory}}',
            '{{%drink}}'
        );

        // drops index for column `idCategory`
        $this->dropIndex(
            '{{%idx-drink-idCategory}}',
            '{{%drink}}'
        );

        $this->dropColumn('{{%drink}}', 'idCategory');
    }
}
