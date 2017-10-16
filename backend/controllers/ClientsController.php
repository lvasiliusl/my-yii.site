<?php
namespace backend\controllers;

use Yii;
use backend\models\Clients;
use yii\web\Controller;


/**
 *
 */
class ClientsController extends Controller
{
    public function actionIndex()
    {
        $client = Clients::find();

        $this->view->title = 'Clients List';
        return $this->render('clients', ['client' => $client]);
    }

    public function actionNewClient()
    {
        $model = new Clients();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Success!');
            return $this->redirect('index');
        }

        return $this->render('new-client', ['model' => $model]);
    }
}
