<?php

namespace app\controllers;

use Yii;
use app\models\Event;
use app\models\EventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Booking;

/**
 * EventController implements the CRUD actions for Event model.
 */
class EventController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        foreach ($dataProvider->models as $model) {
            //your logic
            if (isset($model)) {
                $booking = Booking::findAll([
                    'event_id' => $model['event_id'],
                ]);
                $print2 = [];
                $countPax = 0;
                if (isset($booking)) {
                    foreach ($booking as $row) {
                        $print2[] = $row;
                    }
                    $booking1count = count($print2);
                    for ($i1 = 0;
                         $i1 < $booking1count;
                         $i1++) {
                        $countPax = $countPax + $print2[$i1]['pax_total'];
                    }
                    $model->event_total_attendees = $countPax;
                }
            }
            $model->event_total_attendees = $countPax;
        }
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Event model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Event model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Event();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->event_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->event_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Event model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Event model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Event the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Event::findOne($id)) !== null) {
            if (isset($model)) {
                $booking = Booking::findAll([
                    'event_id' => $model['event_id'],
                ]);
                $print2 = [];
                $countPax = 0;
                if (isset($booking)) {
                    foreach ($booking as $row) {
                        $print2[] = $row;
                    }
                    $booking1count = count($print2);
                    for ($i1 = 0;
                         $i1 < $booking1count;
                         $i1++) {
                        $countPax = $countPax + $print2[$i1]['pax_total'];
                    }
                    $model->event_total_attendees = $countPax;
                }
            }
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
