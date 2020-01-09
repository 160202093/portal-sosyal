<?php

namespace kouosl\sosyal\models;

use Yii;

/**
 * This is the model class for table "share".
 *
 * @property int $id
 * @property int $UserID
 * @property string $Date
 * @property string $Text
 */
class Share extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'share';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['UserID'], 'integer'],
            [['Date', 'Text'], 'string'],
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
            'Date' => 'Date',
            'Text' => 'Text',
        ];
    }
}
