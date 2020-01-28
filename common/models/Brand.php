<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $name
 * @property int $producerId
 *
 * @property Producer $producer
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'producerId'], 'required'],
            [['producerId'], 'default', 'value' => null],
            [['producerId'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['producerId'], 'exist', 'skipOnError' => true, 'targetClass' => Producer::className(), 'targetAttribute' => ['producerId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'producerId' => 'Producer ID',
        ];
    }

    /**
     * Gets query for [[Producer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducer()
    {
        return $this->hasOne(Producer::className(), ['id' => 'producerId']);
    }
}
