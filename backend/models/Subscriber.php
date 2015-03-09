<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%subscriber}}".
 *
 * @property integer $id
 * @property string $groups
 * @property string $full_name
 * @property string $email
 * @property integer $user_id
 * @property string $created_on
 * @property integer $confirmed
 * @property integer $status
 */
class Subscriber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subscriber}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['user_id', 'confirmed', 'status'], 'integer'],
            [['created_on'], 'safe'],
            [['groups'], 'string', 'max' => 250],
            [['full_name'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 200],
            [['email'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'groups' => Yii::t('app', 'Groups'),
            'full_name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'user_id' => Yii::t('app', 'User'),
            'created_on' => Yii::t('app', 'Created On'),
            'confirmed' => Yii::t('app', 'Confirmed'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
