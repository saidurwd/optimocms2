<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%user_group}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $details
 */
class UserGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['details'], 'string'],
            [['title'], 'string', 'max' => 150],
            [['title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Group'),
            'details' => Yii::t('app', 'Details'),
        ];
    }
}
