<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%banner}}".
 *
 * @property integer $id
 * @property integer $category
 * @property string $title
 * @property string $image
 * @property string $clickurl
 * @property string $details
 * @property integer $status
 * @property integer $sticky
 * @property integer $ordering
 * @property string $created_on
 * @property integer $created_by
 * @property string $publish_up
 * @property string $publish_down
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%banner}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'status', 'sticky', 'ordering', 'created_by'], 'integer'],
            [['title'], 'required'],
            [['details'], 'string'],
            [['created_on', 'publish_up', 'publish_down'], 'safe'],
            [['title', 'image', 'clickurl'], 'string', 'max' => 250]
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
            'title' => Yii::t('app', 'Banner'),
            'image' => Yii::t('app', 'Image'),
            'clickurl' => Yii::t('app', 'Click URL'),
            'details' => Yii::t('app', 'Details'),
            'status' => Yii::t('app', 'Status'),
            'sticky' => Yii::t('app', 'Sticky'),
            'ordering' => Yii::t('app', 'Ordering'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'publish_up' => Yii::t('app', 'Publish Up'),
            'publish_down' => Yii::t('app', 'Publish Down'),
        ];
    }
}
