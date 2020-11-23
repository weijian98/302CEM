<?php

namespace app\models;
use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 * This is the model class for table "booking".
 *
 * @property int $booking_id
 * @property int $booking_info_id
 * @property date $booking_date
 * @property int $pax_total 
 * @property int $time
 * @property string $seat_number_row
 * @property int $ticket_count
 * @property int $ticket_id
 * @property int $user_id
 */
class book extends ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%booking}}';
    }
}
