<?php

use yii\db\Migration;

/**
 * Handles the dropping of table `{{%brand}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%producer}}`
 */
class m200129_130211_drop_brand_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // drops foreign key for table `{{%producer}}`
        $this->dropForeignKey(
            '{{%fk-brand-producerId}}',
            '{{%brand}}'
        );

        // drops index for column `producerId`
        $this->dropIndex(
            '{{%idx-brand-producerId}}',
            '{{%brand}}'
        );

        $this->dropTable('{{%brand}}');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->createTable('{{%brand}}', [
            'id' => $this->primaryKey(),
            'name' => $this->char(255)->notNull()->unique(),
            'producerId' => $this->integer()->notNull(),
        ]);

        // creates index for column `producerId`
        $this->createIndex(
            '{{%idx-brand-producerId}}',
            '{{%brand}}',
            'producerId'
        );

        // add foreign key for table `{{%producer}}`
        $this->addForeignKey(
            '{{%fk-brand-producerId}}',
            '{{%brand}}',
            'producerId',
            '{{%producer}}',
            'id',
            'CASCADE'
        );
    }
}
