<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%currency}}".
 *
 * @property integer $id
 * @property string $currency_name
 * @property string $currency_code_2
 * @property string $currency_code_3
 * @property integer $currency_numeric_code
 * @property string $currency_exchange_rate
 * @property string $currency_symbol
 * @property string $currency_decimal_place
 * @property string $currency_decimal_symbol
 * @property string $currency_thousands
 * @property integer $ordering
 * @property integer $status
 */
class Currency extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%currency}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_name'], 'required'],
            [['currency_numeric_code', 'ordering', 'status'], 'integer'],
            [['currency_exchange_rate'], 'number'],
            [['currency_name'], 'string', 'max' => 100],
            [['currency_code_2'], 'string', 'max' => 2],
            [['currency_code_3'], 'string', 'max' => 3],
            [['currency_symbol', 'currency_decimal_place', 'currency_decimal_symbol', 'currency_thousands'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'currency_name' => Yii::t('app', 'Currency'),
            'currency_code_2' => Yii::t('app', 'Code 2'),
            'currency_code_3' => Yii::t('app', 'Code 3'),
            'currency_numeric_code' => Yii::t('app', 'Numeric Code'),
            'currency_exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'currency_symbol' => Yii::t('app', 'Symbol'),
            'currency_decimal_place' => Yii::t('app', 'Decimal Place'),
            'currency_decimal_symbol' => Yii::t('app', 'Decimal Symbol'),
            'currency_thousands' => Yii::t('app', 'Thousands'),
            'ordering' => Yii::t('app', 'Ordering'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
