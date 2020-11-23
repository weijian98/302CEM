<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $booking_id
 * @property int $booking_info_id
 * @property string $booking_date
 * @property int $ticket_count
 * @property int $user_id
 * @property int $pax_total 
 * @property int $time
 * @property string $seat_number_row
 * @property User $user
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
            [['booking_info_id', 'ticket_count'], 'required'],
            [['booking_info_id', 'ticket_count'], 'integer'],
            [['booking_date'], 'safe'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'pax_total'=>'Pax',
            'time'=>'Time',
            'seat_number_row'=>'Seat Row',
            'ticket_count' => 'Ticket Count',
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
}
