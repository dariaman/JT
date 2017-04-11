<?php

namespace app\controllers;

use Yii;
use app\models\MGallery;
use app\models\MGallerySearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * MGalleryController implements the CRUD actions for MGallery model.
 */
class MGalleryController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all MGallery models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MGallerySearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MGallery model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new MGallery model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MGallery();

        if ($model->load(Yii::$app->request->post())) {
            $model->galleriGambarUrl = UploadedFile::getInstance($model, 'pic');
            $img = Yii::$app->security->generateRandomString();

            $nama = $img . '.' . $model->galleriGambarUrl->extension;
            $model->galleriGambarUrl->saveAs(Yii::$app->params['uploadGalery'] . $nama);
            $model->galleriGambarUrl = $nama;
            $model->save(false);
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if (Yii::$app->request->isPost) {
            if (file_exists(Yii::$app->params['uploadGalery'] . $model->galleriGambarUrl)){
                unlink(Yii::$app->params['uploadGalery'] . $model->galleriGambarUrl);    
            }
            $model->load(Yii::$app->request->post());
            $model->galleriGambarUrl = UploadedFile::getInstance($model, 'pic');
            $img = Yii::$app->security->generateRandomString();
            $nama = $img . '.' . $model->galleriGambarUrl->extension;
            $model->galleriGambarUrl->saveAs(Yii::$app->params['uploadGalery'] . $nama);
            $model->galleriGambarUrl = $nama;
            $model->save(false);
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $model->delete();
        if (file_exists(Yii::$app->params['uploadGalery'] . $model->galleriGambarUrl)){
            unlink(Yii::$app->params['uploadGalery'] . $model->galleriGambarUrl);    
        }
        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = MGallery::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
