<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%weblink}}".
 *
 * @property integer $id
 * @property string $category
 * @property string $title
 * @property string $details
 * @property string $click_url
 * @property string $created_on
 * @property integer $created_by
 * @property integer $hits
 * @property integer $status
 */
class Weblink extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%weblink}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'title'], 'required'],
            [['details'], 'string'],
            [['created_on'], 'safe'],
            [['created_by', 'hits', 'status'], 'integer'],
            [['category', 'click_url'], 'string', 'max' => 250],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'category' => Yii::t('app', 'Category'),
            'title' => Yii::t('app', 'Title'),
            'details' => Yii::t('app', 'Details'),
            'click_url' => Yii::t('app', 'URL'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'hits' => Yii::t('app', 'Hits'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
