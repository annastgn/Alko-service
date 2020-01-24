<?php

use yii\db\Migration;

/**
 * Handles dropping columns from table `{{%User}}`.
 */
class m200123_055641_add_Producer_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert('producer', ['id'], [
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
        Yii::$app->db->createCommand()->delete('producer', ['in', ['id'],
                ['1'],
                ['2'],
                ['3']]
        )->execute();
    }
}
