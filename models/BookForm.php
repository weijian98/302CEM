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
    public $booking_date;
    public $pax_total;
    public $time;
    public $seat_number_row;
    public $payment_method;
    public $event_id;
    public $user_id;
    public $available_seat;
    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['booking_date','pax_total','available_seat','event_id', 'time', 'seat_number_row', 'payment_method'], 'required'],
        ];
    }
    
    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function booking()
    {
        if($this->pax_total <= $this->available_seat) {
            $booking = new Booking();
            $booking->booking_date = $this->booking_date;
            $booking->pax_total = $this->pax_total;
            $booking->time = $this->time;
            $booking->seat_number_row = $this->seat_number_row;
            $booking->payment_method = $this->payment_method;
            $booking->event_id = $this->event_id;
            $booking->user_id = Yii::$app->user->identity->id;

            //$booking->booking_date = "2020-11-25";
            //  $booking->pax_total = 7;
           // $booking->time = "12:12";
            //  $booking->seat_number_row = "A";
            //$booking->payment_method = "Grab";
            //  $booking->event_id = 2;
            // $booking->user_id = 6;
            return $booking->save();

        }else{
            return null;
        }
    }
}