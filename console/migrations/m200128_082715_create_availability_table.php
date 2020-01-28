<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%availability}}`.
 */
class m200128_082715_create_availability_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%availability}}', [
            'idDrink' => $this->integer(),
            'idShop' => $this->integer(),
            'idVolume' => $this->integer(),
            'price' => $this->money(),
        ]);
        $this->addPrimaryKey('availability_pk', 'availability', ['idDrink', 'idShop', 'idVolume']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%availability}}');
    }
}
