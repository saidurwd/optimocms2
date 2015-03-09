<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%document}}".
 *
 * @property integer $id
 * @property integer $category
 * @property string $title
 * @property string $document_file
 * @property string $document_type
 * @property string $document_size
 * @property string $details
 * @property string $created_on
 * @property integer $created_by
 * @property string $modified_on
 * @property integer $modified_by
 * @property integer $status
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%document}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'title'], 'required'],
            [['category', 'created_by', 'modified_by', 'status'], 'integer'],
            [['details'], 'string'],
            [['created_on', 'modified_on'], 'safe'],
            [['title', 'document_file'], 'string', 'max' => 255],
            [['document_type', 'document_size'], 'string', 'max' => 50]
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
            'title' => Yii::t('app', 'Document'),
            'document_file' => Yii::t('app', 'File'),
            'document_type' => Yii::t('app', 'Type'),
            'document_size' => Yii::t('app', 'Size'),
            'details' => Yii::t('app', 'Details'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified_on' => Yii::t('app', 'Modified On'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
