<?php
namespace app\commands;

use yii\console\Controller;
use yii\console\ExitCode;
use Countries\Application\CountryApplicationService;
use Countries\Infrastructure\Country\CountryRepository;

class CountryController extends Controller
{
    public function actionDensity($name)
    {
        $cs = new CountryApplicationService(new CountryRepository());
        echo $cs->getCountryDensity($name);
    }
}
