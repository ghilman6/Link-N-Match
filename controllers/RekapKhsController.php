<?php

namespace app\controllers;

use Yii;
use app\models\RekapKhs;
use app\models\RekapKhsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RekapKhsController implements the CRUD actions for RekapKhs model.
 */
class RekapKhsController extends Controller
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
     * Lists all RekapKhs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RekapKhsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RekapKhs model.
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
     * Creates a new RekapKhs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RekapKhs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing RekapKhs model.
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
     * Deletes an existing RekapKhs model.
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
     * Finds the RekapKhs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RekapKhs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RekapKhs::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    //Tambahan pdf
    public function actionExportPdf()
    {
        $searchModel = new RekapKhsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $html = $this->renderPartial('rekap_khs',['dataProvider'=>$dataProvider]);
        $mpdf=new \mPDF('c','A4','','' , 0 , 0 , 0 , 0 , 0 , 0);  
        $mpdf->SetDisplayMode('fullpage');
        $mpdf->list_indent_first_level = 0;  // 1 or 0 - whether to indent the first level of a list
        $mpdf->WriteHTML($html);
        $mpdf->Output();
        exit;
    }

    //Tambah excel
    public function actionExportExcel2()
    {
        $searchModel = new RekapKhsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        // Initalize the TBS instance
        $OpenTBS = new \hscstudio\export\OpenTBS; // new instance of TBS
        // Change with Your template kaka
		$template = Yii::getAlias('@hscstudio/export').'/templates/opentbs/rekapKhs.xlsx';
        $OpenTBS->LoadTemplate($template); // Also merge some [onload] automatic fields (depends of the type of document).
        //$OpenTBS->VarRef['modelName']= "Mahasiswa";				
        $data = [];
        $no=1;
        foreach($dataProvider->getModels() as $khs){
            $data[] = [
                'no'=>$no++,
                'nim'=>$khs->nim,
                'nama'=>$khs->nim0->name,
                'ips'=>$khs->ips,
                'ipk'=>$khs->ipk,
            ];
        }
        
        $OpenTBS->MergeBlock('data', $data);
        // Output the result as a file on the server. You can change output file
        $OpenTBS->Show(OPENTBS_DOWNLOAD, 'rekap_khs.xlsx'); // Also merges all [onshow] automatic fields.			
        exit;
    } 
}
