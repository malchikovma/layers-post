<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use Countries\Application\CountryApplicationService;
use Countries\Infrastructure\Country\CountryRepository;

class CountryController extends Controller
{

    public function actionIndex()
    {
        return 'index';
    }
    
    
    public function actionDensity($name)
    {
        $cs = new CountryApplicationService(new CountryRepository());
        return $cs->getCountryDensity($name);
    }

}
