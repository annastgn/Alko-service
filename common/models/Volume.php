<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "volume".
 *
 * @property int $id
 * @property float|null $volume
 */
class Volume extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'volume';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['volume'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'volume' => 'Volume',
        ];
    }
}
