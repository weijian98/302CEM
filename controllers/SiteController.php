<?php

namespace app\controllers;

use Yii;
use app\models\ResendVerificationEmailForm;
use app\models\VerifyEmailForm;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\SignupForm;
use app\models\BookForm;

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
        $announcement = (new \yii\db\Query())
            ->select(['title','text'])
            ->from('announcement');


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
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
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

    public function actionAnnouncement()
    {
        return $this->render('announcement');
    }

        /**
     * Displays bookEventpage.
     *
     * @return string
     */
    public function actionBookevent()
    {
        return $this->render('bookEvent');
    }

    /**
     * Displays bookhistorypage.
     *
     * @return string
     */
    public function actionBookinghistory()
    {
        return $this->render('Bookinghistory');
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
	
	public function actionPayment()
    {
        return $this->render('payment');
    }
    /**
     * Displays eventpage.
     *
     * @return string
     */
    public function actionEventdetails()
    {
        return $this->render('eventdetails');
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }

    /**
     * Displays eventpage.
     *
     * @return mixed
     */
    public function actionBooking()
    {
        if(Yii::$app->user->isGuest){
            Yii::$app->session->setFlash('error', 'Please login to buy ticket');
            return $this->redirect(array('site/login'));
        }
        $model = new BookForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->booking()) {
                Yii::$app->session->setFlash('success', 'Your ticket has successfully paid.');
                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Unable to buy ticket');
            }
        }
        return $this->render('booking', [
            'model' => $model,
        ]);
    }
    
}
