<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Barang;
use app\models\KategoriBarang;

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
        $query = Barang::find();
        $queryGaming = Barang::find()->where('kategori_id = 3');
        $queryMacbook = Barang::find()->where('kategori_id = 1')->orWhere('kategori_id = 4');

        $barangTerbarus = $query->orderBy(['tanggal'=>SORT_DESC])
            ->limit(8)->all();
        $hotGamings = $queryGaming->orderBy(['harga'=>SORT_DESC])
            ->limit(3)->all();
        $hotMacbooks = $queryMacbook->orderBy(['harga'=>SORT_DESC])
            ->limit(3)->all();
        /*$hotGamings = $query->orderBy(['harga'=>SORT_DESC])
            ->limit(3)->all();*/

        return $this->render('index', [
            'barangTerbarus' => $barangTerbarus,
            'hotGamings'=>$hotGamings,
            'hotMacbooks'=>$hotMacbooks
        ]);
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
    public function actionProducts()
    {
        $query = Barang::find();
        $pages = new \yii\data\Pagination([
        'totalCount' => $query->count(),
        'pageSize' => 6
        ]);
        $barangs = $query->offset($pages->offset)
        ->limit($pages->limit)->all();
        return $this->render('product', [
        'barangs' => $barangs, 'pages' => $pages,
        ]);
    }

}
