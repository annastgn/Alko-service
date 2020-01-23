<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Comment".
 *
 * @property int $id
 * @property string $content
 * @property string $date
 * @property int $userId
 * @property int $drinkId
 *
 * @property Drink $drink
 * @property User $user
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'date', 'userId', 'drinkId'], 'required'],
            [['content'], 'string'],
            [['date'], 'safe'],
            [['userId', 'drinkId'], 'default', 'value' => null],
            [['userId', 'drinkId'], 'integer'],
            [['drinkId'], 'exist', 'skipOnError' => true, 'targetClass' => Drink::className(), 'targetAttribute' => ['drinkId' => 'id']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'date' => 'Date',
            'userId' => 'User ID',
            'drinkId' => 'Drink ID',
        ];
    }

    /**
     * Gets query for [[Drink]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDrink()
    {
        return $this->hasOne(Drink::className(), ['id' => 'drinkId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
