<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%directory}}".
 *
 * @property integer $id
 * @property string $category
 * @property string $title
 * @property string $email
 * @property string $mobile
 * @property string $telephone
 * @property string $fax
 * @property string $website
 * @property string $address
 * @property integer $country
 * @property integer $state
 * @property integer $city
 * @property integer $district
 * @property integer $thana
 * @property string $postcode
 * @property string $details
 * @property string $created_on
 * @property integer $created_by
 * @property string $modified_on
 * @property integer $modified_by
 * @property integer $hits
 * @property integer $status
 */
class Directory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%directory}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'title'], 'required'],
            [['country', 'state', 'city', 'district', 'thana', 'created_by', 'modified_by', 'hits', 'status'], 'integer'],
            [['details'], 'string'],
            [['created_on', 'modified_on'], 'safe'],
            [['category'], 'string', 'max' => 250],
            [['title', 'email', 'telephone', 'fax', 'website', 'address'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 100],
            [['postcode'], 'string', 'max' => 50]
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
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'telephone' => Yii::t('app', 'Phone'),
            'fax' => Yii::t('app', 'Fax'),
            'website' => Yii::t('app', 'Website'),
            'address' => Yii::t('app', 'Address'),
            'country' => Yii::t('app', 'Country'),
            'state' => Yii::t('app', 'State'),
            'city' => Yii::t('app', 'City'),
            'district' => Yii::t('app', 'Didtrict'),
            'thana' => Yii::t('app', 'Thana'),
            'postcode' => Yii::t('app', 'Postcode'),
            'details' => Yii::t('app', 'Details'),
            'created_on' => Yii::t('app', 'Created On'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified_on' => Yii::t('app', 'Modified On'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'hits' => Yii::t('app', 'Hits'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
