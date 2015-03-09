<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%district}}".
 *
 * @property integer $id
 * @property integer $country_id
 * @property integer $state_id
 * @property integer $city_id
 * @property string $district_name
 * @property integer $status
 *
 * @property Country $country
 * @property State $state
 * @property City $city
 */
class District extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%district}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['country_id', 'state_id', 'city_id', 'status'], 'integer'],
            [['state_id', 'city_id', 'district_name'], 'required'],
            [['district_name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country'),
            'state_id' => Yii::t('app', 'State'),
            'city_id' => Yii::t('app', 'City'),
            'district_name' => Yii::t('app', 'District'),
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity() {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

}
