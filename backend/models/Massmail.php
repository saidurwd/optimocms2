<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%massmail}}".
 *
 * @property string $id
 * @property string $subject
 * @property string $message_body
 * @property string $created_on
 * @property integer $created_by
 * @property string $modified_on
 * @property integer $modified_by
 */
class Massmail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%massmail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subject', 'message_body'], 'required'],
            [['message_body'], 'string'],
            [['created_on', 'modified_on'], 'safe'],
            [['created_by', 'modified_by'], 'integer'],
            [['subject'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'subject' => Yii::t('app', 'Subject'),
            'message_body' => Yii::t('app', 'Message'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified_on' => Yii::t('app', 'Modified On'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
