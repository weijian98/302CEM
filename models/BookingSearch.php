<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Booking;

/**
 * BookingSearch represents the model behind the search form of `app\models\Booking`.
 */
class BookingSearch extends Booking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['booking_id', 'pax_total', 'event_id', 'user_id'], 'integer'],
            [['booking_date', 'time', 'seat_number_row', 'payment_method'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Booking::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

       // grid filtering conditions
       $query->andFilterWhere([
        'booking_id' => $this->booking_id,
        'booking_date' => $this->booking_date,
        'pax_total' => $this->pax_total,
        'event_id' => $this->event_id,
        'user_id' => $this->user_id,
    ]);

    $query->andFilterWhere(['like', 'time', $this->time])
        ->andFilterWhere(['like', 'seat_number_row', $this->seat_number_row])
        ->andFilterWhere(['like', 'payment_method', $this->payment_method]);

    return $dataProvider;
}
}

