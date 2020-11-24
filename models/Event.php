<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $event_id
 * @property string $event_date
 * @property string $event_location
 * @property string $event_time
 * @property string $event_duration
 * @property int $event_totalseats
edit and * @property string $attendees
 */
class Event extends \yii\db\ActiveRecord
{
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
            [['event_id', 'event_date', 'event_location', 'event_time', 'event_duration', 'event_totalseats', 'attendees'], 'required'],
            [['event_id', 'event_totalseats'], 'integer'],
            [['event_date', 'event_time', 'event_duration'], 'safe'],
            [['event_location'], 'string', 'max' => 52],
            [['attendees'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_date' => 'Event Date',
            'event_location' => 'Event Location',
            'event_time' => 'Event Time',
            'event_duration' => 'Event Duration',
            'event_totalseats' => 'Event Totalseats',
            'attendees' => 'Attendees',
        ];
    }
}
