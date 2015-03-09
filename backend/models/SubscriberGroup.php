<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%subscriber_group}}".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $title
 * @property string $details
 * @property integer $status
 */
class SubscriberGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%subscriber_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'title'], 'required'],
            [['parent', 'status'], 'integer'],
            [['details'], 'string'],
            [['title'], 'string', 'max' => 150]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent' => Yii::t('app', 'Parent'),
            'title' => Yii::t('app', 'Category'),
            'details' => Yii::t('app', 'Details'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
