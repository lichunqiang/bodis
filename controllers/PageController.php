<?php namespace app\controllers;

use yii\web\Controller;

class PageController extends Controller
{
	public function actionIndex()
	{
		echo $this->renderPartial('index.tpl');
	}
}