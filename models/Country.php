<?php
namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
	public static function getDB()
	{
		return \Yii::$app->db;
	}
}