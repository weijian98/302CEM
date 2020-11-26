<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $event_id
 * @property string $event_name
 * @property string $event_date
 * @property string $event_location
 * @property string $event_time
 * @property string $event_duration
 * @property int $event_totalseats
 * @property int $event_total_attendees
 * @property string $event_info
 * @property string $event_organizer
 * @property float $event_ticket_price
 * @property string $event_picture
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $event_total_attendees;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_name', 'event_date', 'event_location', 'event_time', 'event_duration', 'event_totalseats', 'event_info', 'event_organizer', 'event_ticket_price', 'event_picture'], 'required'],
            [['event_date', 'event_time', 'event_duration'], 'safe'],
            [['event_totalseats'], 'integer'],
            [['event_info', 'event_organizer', 'event_picture'], 'string'],
            [['event_ticket_price'], 'number'],
            [['event_total_attendees'], 'number'],
            [['event_name'], 'string', 'max' => 100],
            [['event_location'], 'string', 'max' => 52],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_name' => 'Event Name',
            'event_date' => 'Event Date',
            'event_location' => 'Event Location',
            'event_time' => 'Event Time',
            'event_duration' => 'Event Duration',
            'event_totalseats' => 'Event Totalseats',
            'event_info' => 'Event Info',
            'event_organizer' => 'Event Organizer',
            'event_ticket_price' => 'Event Ticket Price',
            'event_picture' => 'Event Picture',
            'event_total_attendees' =>'Event Total Attendees',
        ];
    }
}