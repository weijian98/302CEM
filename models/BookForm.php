<?php
namespace app\models;

use Yii;
use yii\base\Model;
use app\models\Booking;

/**
 * ContactForm is the model behind the contact form.
 */
class BookForm extends Model
{
    public $booking_id;
    public $booking_info_id;
    public $booking_date;
    public $pax_total;
    public $time;
    public $seat_number_row;
    public $payment_method;
    public $ticket_count;
    public $ticket_id;
    public $user_id;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['booking_info_id','booking_date', 'ticket_count', 'ticket_id', 'pax_total', 'time', 'seat_number_row', 'payment_method'], 'required'],
        ];
    }
    
    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function booking()
    { 
            $booking = new Booking();
            $booking->booking_info_id = 1;
            $booking->booking_date = Yii::$app->formatter->asDate($this->booking_date, 'yyyy-MM-dd');
            $booking->ticket_count = 1;
            $booking->ticket_id = 1;
            $booking->pax_total = $this->pax_total;
            $booking->time = $this->time;
            $booking->seat_number_row = $this->seat_number_row;
            $booking->payment_method = $this->payment_method;
            $booking->user_id = Yii::$app->user->identity->id;

            return $booking->save();
        
        
    }
}