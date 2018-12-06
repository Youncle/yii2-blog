<?php

namespace frontend\controllers;

use Yii;
use common\models\base\Post;
use common\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller
{
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'delete' => ['POST'],
//                ],
//            ],
//        ];
//    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView2($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single Post model.
     * @param string $slug
     * @return mixed
     */
    public function actionView($slug)
    {
        $model = Post::find()->where(['slug'=>$slug])->one();
        if (!is_null($model)) {
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            return $this->redirect('/site/index');
        }
    }


    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

//    protected function findModelBySlug($slug)
//    {
//        if (($model = Post::findOne(['slug' => $slug])) !== null) {
//            return $model;
//        } else {
//            throw new NotFoundHttpException();
//        }
//    }
}
