<?php
namespace backend\controllers;

use Yii;
use backend\models\Projects;
use yii\web\Controller;
use yii\data\ActiveDataProvider;

/**
*
*/
class ProjectsController extends Controller
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Projects::find(),
            'pagination' => [
                'pageSize' => 10
            ]
        ]);

        $this->view->title = 'Projects List';
        return $this->render('projects', ['dataProvider' => $dataProvider]);
    }

    public function actionNewProject()
    {
        $model = new Projects();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goBack();
        }

        return $this->render('new-project');
    }
}
