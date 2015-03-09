<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%country}}".
 *
 * @property string $id
 * @property integer $worldzone_id
 * @property string $country_name
 * @property string $country_3_code
 * @property string $country_2_code
 * @property integer $ordering
 * @property integer $status
 */
class Country extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%country}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['worldzone_id', 'ordering', 'status'], 'integer'],
            [['country_name'], 'required'],
            [['country_name'], 'string', 'max' => 255],
            [['country_3_code'], 'string', 'max' => 3],
            [['country_2_code'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'worldzone_id' => Yii::t('app', 'World Zone'),
            'country_name' => Yii::t('app', 'Country'),
            'country_3_code' => Yii::t('app', 'Code 3'),
            'country_2_code' => Yii::t('app', 'Code 2'),
            'ordering' => Yii::t('app', 'Ordering'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

}
