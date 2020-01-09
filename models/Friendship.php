<?php

namespace kouosl\sosyal\models;

use Yii;
use kouosl\user\models\User;




/**
 * This is the model class for table "friendship".
 *
 * @property int $id
 * @property int $UserID
 * @property string $FriendID
 * @property string $Relation_start_date
 *
 * @property User $user
 */
class Friendship extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'friendship';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UserID'], 'integer'],
            [['FriendID', 'Relation_start_date'], 'string'],
            [['UserID'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['UserID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'UserID' => 'User ID',
            'FriendID' => 'Friend ID',
            'Relation_start_date' => 'Relation Start Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'UserID']);
    }
}
