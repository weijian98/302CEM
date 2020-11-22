<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $payment_id
 * @property string $payment_date
 * @property float $payment_amount
 * @property string $cardholder_name
 * @property string $card_number
 * @property string $cvv
 * @property string $credit_card_type
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'payment_date', 'payment_amount', 'cardholder_name', 'card_number', 'cvv', 'credit_card_type'], 'required'],
            [['payment_id'], 'integer'],
            [['payment_date'], 'safe'],
            [['payment_amount'], 'number'],
            [['cardholder_name', 'card_number', 'cvv', 'credit_card_type'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'payment_id' => 'Payment ID',
            'payment_date' => 'Payment Date',
            'payment_amount' => 'Payment Amount',
            'cardholder_name' => 'Cardholder Name',
            'card_number' => 'Card Number',
            'cvv' => 'Cvv',
            'credit_card_type' => 'Credit Card Type',
        ];
    }
}
