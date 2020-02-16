<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class HelloController extends Controller 
{

	public function actionWorld(){

		return $this->render('hello-world');

	}

}