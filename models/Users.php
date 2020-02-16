<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Users extends ActiveRecord {

	public static function tableName() {
		return "{{users}}";
	}

	public static function getList() {
		return Yii::$app->db->createCommand('SELECT * FROM users ORDER BY id DESC')->queryAll();
	}

}