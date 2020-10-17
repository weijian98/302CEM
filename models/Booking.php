<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $booking_id
 * @property int $booking_info_id
 * @property string $booking_date
 * @property int $ticket_id
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_info_id', 'ticket_id'], 'required'],
            [['booking_info_id', 'ticket_id'], 'integer'],
            [['booking_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_id' => 'Booking ID',
            'booking_info_id' => 'Booking Info ID',
            'booking_date' => 'Booking Date',
            'ticket_id' => 'Ticket ID',
        ];
    }
}