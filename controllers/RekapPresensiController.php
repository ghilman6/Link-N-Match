<?php

namespace app\controllers;

use Yii;
use app\models\RekapPresensi;
use app\models\RekapPresensiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekapPresensiController implements the CRUD actions for RekapPresensi model.
 */
class RekapPresensiController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all RekapPresensi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RekapPresensiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RekapPresensi model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RekapPresensi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RekapPresensi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RekapPresensi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing RekapPresensi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RekapPresensi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RekapPresensi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RekapPresensi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

     //Tambah excel
     public function actionExportExcel2()
     {
         $searchModel = new RekapPresensiSearch();
         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
         
         // Initalize the TBS instance
         $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
         // Change with Your template kaka
         $template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/rekapPresensi.xlsx';
         $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
         //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
         $data = [];
         $no=1;
         foreach($dataProvider->getModels() as $presensi){
             $data[] = [
                 'no'=>$no++,
                 'nim'=> $presensi->nim,
                 'nama'=>$presensi->nim0->name,
                 'kehadiran'=>$presensi->kehadiran,
                 'matkul'=>$presensi->idmatkul0->name,
                 'dosen'=>$presensi->iddosen0->name
             ];
         }
         
         $OpenTBS->MergeBlock('data', $data);
         // Output the result as a file on the server. You can change output file
         $OpenTBS->Show(OPENTBS_DOWNLOAD, 'rekap_presensi.xlsx'); // Also merges all [onshow] automatic fields.			
         exit;
     }
}
