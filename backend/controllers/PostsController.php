<?php
namespace backend\controllers;

use Yii;
use backend\models\Posts;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

/**
 * Posts Controller
 */
class PostsController extends Controller
{
  public function actionIndex()
  {
    $dataProvider = new ActiveDataProvider([
      'query' => Posts::find()->where(['visibility'=>1])->orderBy('date DESC'),
      'pagination' => [
        'pageSize' => 10,
      ],
    ]);
    $this->view->title = 'Posts List';
    return $this->render('posts', ['dataProvider' => $dataProvider]);
  }
}
