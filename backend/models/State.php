<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%state}}".
 *
 * @property integer $id
 * @property integer $country_id
 * @property string $state_name
 * @property string $state_3_code
 * @property string $state_2_code
 * @property integer $ordering
 * @property integer $status
 *
 * @property Country $country
 */
class State extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return '{{%state}}';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['country_id', 'state_name'], 'required'],
            [['country_id', 'ordering', 'status'], 'integer'],
            [['state_name'], 'string', 'max' => 250],
            [['state_3_code'], 'string', 'max' => 3],
            [['state_2_code'], 'string', 'max' => 2]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('app', 'ID'),
            'country_id' => Yii::t('app', 'Country'),
            'state_name' => Yii::t('app', 'State/Division'),
            'state_3_code' => Yii::t('app', 'Code 3'),
            'state_2_code' => Yii::t('app', 'Code 2'),
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

}
