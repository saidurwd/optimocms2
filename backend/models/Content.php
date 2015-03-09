<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%content}}".
 *
 * @property integer $id
 * @property string $title
 * @property integer $category
 * @property string $details
 * @property string $created_on
 * @property integer $created_by
 * @property string $modified_on
 * @property integer $modified_by
 * @property string $publish_up
 * @property string $publish_down
 * @property integer $ordering
 * @property string $metakey
 * @property string $metadesc
 * @property integer $hits
 * @property integer $featured
 * @property integer $status
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%content}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'details'], 'required'],
            [['category', 'created_by', 'modified_by', 'ordering', 'hits', 'featured', 'status'], 'integer'],
            [['details', 'metakey', 'metadesc'], 'string'],
            [['created_on', 'modified_on', 'publish_up', 'publish_down'], 'safe'],
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
            'title' => Yii::t('app', 'Title'),
            'category' => Yii::t('app', 'Category'),
            'details' => Yii::t('app', 'Details'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified_on' => Yii::t('app', 'Modified On'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'publish_up' => Yii::t('app', 'Publish Up'),
            'publish_down' => Yii::t('app', 'Publish Down'),
            'ordering' => Yii::t('app', 'Ordering'),
            'metakey' => Yii::t('app', 'Metakey'),
            'metadesc' => Yii::t('app', 'Metadesk'),
            'hits' => Yii::t('app', 'Hits'),
            'featured' => Yii::t('app', 'Featured'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
