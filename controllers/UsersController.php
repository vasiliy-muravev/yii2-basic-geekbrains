<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

use app\models\Users;

class UsersController extends Controller {

	public function actionList(){
		$rows = Users::getList();
		//var_dump($row);die;
		return $this->render('list', ['rows' => $rows]);

	}

	public function actionUpdate(){

		$id = Yii::$app->getRequest()->get('id');

		if ($id) {
			$model = Users::findOne(['id' => $id]);
		} else {
			$model = new Users();
		}

		if ($_POST){
			$data = Yii::$app->getRequest()->post('Users');

			$model->login = $data['login'];
			$model->name = $data['name'];
			$model->email = $data['email'];
			$model->save();
			return $this->redirect(['list', 'model' => $model]);
		}
		//var_dump($model); die;
		return $this->render('update', ['model' => $model]);

	}
}