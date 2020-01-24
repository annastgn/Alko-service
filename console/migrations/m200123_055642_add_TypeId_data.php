<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%User}}`.
 */
class m200123_055642_add_TypeId_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert('type', ['id'], [
            ['1'],
            ['2'],
            ['3'],
        ])->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        Yii::$app->db->createCommand()->delete('type', ['in', ['id'],
                ['1'],
                ['2'],
                ['3']]
        )->execute();
    }
}
