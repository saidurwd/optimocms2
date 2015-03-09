<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%city}}".
 *
 * @property integer $id
 * @property integer $country_id
 * @property integer $state_id
 * @property string $city_name
 * @property string $city_3_code
 * @property string $city_2_code
 * @property integer $ordering
 * @property integer $status
 *
 * @property Country $country
 * @property State $state
 */
class City extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%city}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['country_id', 'state_id', 'city_name'], 'required'],
            [['country_id', 'state_id', 'ordering', 'status'], 'integer'],
            [['city_name'], 'string', 'max' => 250],
            [['city_3_code'], 'string', 'max' => 3],
            [['city_2_code'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'country'),
            'state_id' => Yii::t('app', 'State'),
            'city_name' => Yii::t('app', 'City'),
            'city_3_code' => Yii::t('app', 'Code 3'),
            'city_2_code' => Yii::t('app', 'Code 2'),
            'ordering' => Yii::t('app', 'Ordering'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry() {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState() {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }

}
