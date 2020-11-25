<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $booking_id
 * @property string $booking_date
 * @property int $pax_total
 * @property int $event_id
 * @property string $time
 * @property string $seat_number_row
 * @property string $payment_method
 * @property int $user_id
 *
 * @property User $user
 * @property Event $event
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
            [['booking_date', 'pax_total', 'event_id', 'time', 'seat_number_row', 'payment_method', 'user_id'], 'required'],
            [['booking_date'], 'safe'],
            [['pax_total', 'event_id', 'user_id'], 'integer'],
            [['time'], 'string', 'max' => 6],
            [['seat_number_row', 'payment_method'], 'string', 'max' => 10],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['event_id'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['event_id' => 'event_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'booking_id' => 'Booking ID',
            'booking_date' => 'Booking Date',
            'pax_total' => 'Pax Total',
            'event_id' => 'Event ID',
            'time' => 'Time',
            'seat_number_row' => 'Seat Number Row',
            'payment_method' => 'Payment Method',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Event]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['event_id' => 'event_id']);
    }
}
