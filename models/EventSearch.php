<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Event;

/**
 * EventSearch represents the model behind the search form of `app\models\Event`.
 */
class EventSearch extends Event
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['event_id', 'event_totalseats'], 'integer'],
            [['event_name', 'event_date', 'event_location', 'event_time', 'event_duration', 'event_info', 'event_organizer', 'event_picture'], 'safe'],
            [['event_ticket_price'], 'number'],
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
        $query = Event::find();

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
            'event_id' => $this->event_id,
            'event_date' => $this->event_date,
            'event_time' => $this->event_time,
            'event_duration' => $this->event_duration,
            'event_totalseats' => $this->event_totalseats,
            'event_ticket_price' => $this->event_ticket_price,
            'event_total_attendees' => $this->event_total_attendees,
        ]);

        $query->andFilterWhere(['like', 'event_name', $this->event_name])
            ->andFilterWhere(['like', 'event_location', $this->event_location])
            ->andFilterWhere(['like', 'event_info', $this->event_info])
            ->andFilterWhere(['like', 'event_organizer', $this->event_organizer])
            ->andFilterWhere(['like', 'event_picture', $this->event_picture]);

        return $dataProvider;
    }
}
