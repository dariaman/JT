<?php
namespace app\controllers;
use Yii;
use app\models\MKapasitasDetail;
use app\models\MKapasitasDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use app\models\MServiceDetail;
/**
 * MKapasitasDetailController implements the CRUD actions for MKapasitasDetail model.
 */
class MKapasitasDetailController extends Controller
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
     * Lists all MKapasitasDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MKapasitasDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->pagination->pageSize=10;
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    /**
     * Displays a single MKapasitasDetail model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

      public function ary_service_detail(){
        return ArrayHelper::map(MServiceDetail::find()->all(),'serviceDetailId','serviceDetailJudul');
    }

    
    public function ary_status(){
        $ary_status =[['id'=>'1', 'status'=> 'Active'],
            ['id'=>'0', 'status'=> 'InActive']
        ];
        return ArrayHelper::map($ary_status,'id','status');
    }
    /**
     * Creates a new MKapasitasDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new MKapasitasDetail();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kapasitasId]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'data_service_detail'=>self::ary_service_detail()
            ]);
        }
    }
    /**
     * Updates an existing MKapasitasDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->kapasitasId]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'data_status'=>self::ary_status(),
                'data_service_detail'=>self::ary_service_detail()
            ]);
        }
    }
    /**
     * Deletes an existing MKapasitasDetail model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
    /**
     * Finds the MKapasitasDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return MKapasitasDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = MKapasitasDetail::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}