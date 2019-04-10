<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testactivity".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $begin
 * @property string $end
 * @property int $notify
 * @property string $date_created
 * @property int $user_id
 * @property string $newend
 *
 * @property Users $user
 */
class TestactivityBase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testactivity';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'begin', 'notify', 'user_id', 'newend'], 'required'],
            [['begin', 'end', 'date_created', 'newend'], 'safe'],
            [['notify', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['email'], 'string', 'max' => 50],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'begin' => Yii::t('app', 'Begin'),
            'end' => Yii::t('app', 'End'),
            'notify' => Yii::t('app', 'Notify'),
            'date_created' => Yii::t('app', 'Date Created'),
            'user_id' => Yii::t('app', 'User ID'),
            'newend' => Yii::t('app', 'Newend'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
