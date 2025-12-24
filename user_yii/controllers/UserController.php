<?php

namespace app\controllers;

use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

class UserController extends \yii\web\Controller
{
 
    public function behaviors()
    {
        return [
            'access'=>[
                'class' =>  AccessControl::class,
                'only' => ['index', 'update', 'delete', 'view'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['admin']
                    ]
                ]
            ]
        ];  
    }
    
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionView($id){
        return $this->render('view', ['model' => $this->findModel($id)]);
    }

    public function actionUpdate($id){
        $model = $this->findModel($id);
        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->render(['index']);
        }
        return $this->render('update', ['model' => $model]);
    }

    public function actionDelete($id){
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }

    protected function findModel($id){
        if(($model = User::findOne($id)) != null){
            return $model;
        }
        throw new NotFoundHttpException('Пользователь не найден');
    }
}
