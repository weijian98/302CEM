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
    public $booking_id;
    public $booking_info_id;
    public $booking_date;
    public $ticket_id;
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

    public function makeBooking ($attribute, $params) {

        $booking = new Booking();
        $booking ->booking_id = $this->booking_id;
        $booking ->booking_date = $this->booking_date;
        $booking ->booking_info_id = $this->booking_info_id;
        return $booking ->save();
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
