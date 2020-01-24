<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%User}}`.
 */
class m200123_055640_add_Drink_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert('Drink', ['name', 'strength', 'minCost', 'maxCost', 'producerId', 'typeId'], [
            ['Австралия', '0.3', '1000', '3000', '1', '3'],
            ['Fahbr', '0.5', '1500', '5000', '2', '3'],
            ['H2O', '0.5', '2000', '3000', '3', '3'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Yii::$app->db->createCommand()->delete('Drink', ['in', ['name', 'strength', 'minCost', 'maxCost', 'producerId', 'typeId'],
                ['Австралия', '0.3', '1000', '3000', '1', '3'],
                ['Fahbr', '0.5', '1500', '5000', '2', '3'],
                ['H2O', '0.5', '2000', '3000', '3', '3']]
        )->execute();
    }
}
