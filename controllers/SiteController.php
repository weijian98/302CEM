<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Displays eventpage.
     *
     * @return string
     */
    public function actionEvent()
    {
        return $this->render('event');
    }

    /**
     * Displays concertpage.
     *
     * @return string
     */
    public function actionConcert()
    {
        return $this->render('concert');
    }

    /**
     * Displays museumpage.
     *
     * @return string
     */
    public function actionMuseum()
    {
        return $this->render('museum');
    }

    /**
     * Displays codingpage.
     *
     * @return string
     */
    public function actionCoding()
    {
        return $this->render('coding');
    }

    /**
     * Displays hackathonpage.
     *
     * @return string
     */
    public function actionHackathon()
    {
        return $this->render('hackathon');
    }

    /**
     * Displays maskpage.
     *
     * @return string
     */
    public function actionMask()
    {
        return $this->render('mask');
    }

    /**
     * Displays coachellapage.
     *
     * @return string
     */
    public function actionCoachella()
    {
        return $this->render('coachella');
    }
    public function actionBooking()
    {
        return $this->render('booking');
    }

    public function actionPayment(){
        return $this -> render('payment');
    }

    
}
