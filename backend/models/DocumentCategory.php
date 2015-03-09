<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%document_category}}".
 *
 * @property integer $id
 * @property integer $parent
 * @property string $title
 * @property string $details
 * @property integer $status
 */
class DocumentCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%document_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent', 'status'], 'integer'],
            [['title'], 'required'],
            [['details'], 'string'],
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
            'parent' => Yii::t('app', 'Parent'),
            'title' => Yii::t('app', 'Category'),
            'details' => Yii::t('app', 'Details'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
