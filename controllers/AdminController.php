<?php

namespace app\controllers;

use app\models\bfi\Main as BfiMain;
use app\models\eq\Main as EqMain;
use app\models\eq2\Main as EqMain2;
use app\models\hexaco\Main;
use app\models\hexaco\Demo as HexacoDemo;
use app\models\hexaco\Kejujuran as HexacoKejujuran;
use app\models\hexaco\Emosi as HexacoEmosi;
use app\models\hexaco\Ekstraversi as HexacoEkstraversi;
use app\models\hexaco\Kebersetujuan as HexacoKebersetujuan;
use app\models\hexaco\Keberhemahan as HexacoKeberhemahan;
use app\models\hexaco\Terbuka as HexacoTerbuka;
use app\models\hexaco\Skj as HexacoSkj;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use app\models\OkuMain;
use app\models\OkuMainSearch;

use app\models\OkuGroups;
use app\models\OkuDemografi;
use app\models\OkuDimensi;
use app\models\OkuStrategi;
use app\models\OkuKesan;
use app\models\OkuSumber;
use app\models\sdts\Main as SdtsMain;
use app\models\TipiMain;
use app\models\VDataMea;
use app\models\VDataMeaSearch;
use app\models\VDataMipkSearch;
use app\models\VDataMeaV2Search;

class AdminController extends \yii\web\Controller
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                //                'only' => ['index'],
                'rules' => [
                    [
                        //                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {

        $searchModel = new OkuMainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionData()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new OkuMainSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionExportDataCsv()
    {
        $searchModel = new OkuMainSearch();
        $searchModel->load(Yii::$app->request->queryParams);

        $columns = [
            ['#', null, null],
            ['Icno', 'm.icno', 'icno'],
            ['Demografi No Oku', 'd.no_oku', 'no_oku'],
            ['Tarikh', 'm.created_dt', 'created_dt'],
            ['PD1', 'd.kategori', 'kategori'],
            ['PD2', 'd.sebab', 'sebab'],
            ['PD3', 'd.sejak', 'sejak'],
            ['PD4', 'd.jantina', 'jantina'],
            ['PD5', 'd.agama', 'agama'],
            ['PD6', 'd.etnik', 'etnik'],
            ['PD7', 'd.kahwin', 'kahwin'],
            ['kerusi_roda', 'd.kerusi_roda', 'kerusi_roda'],
            ['kaki_palsu', 'd.kaki_palsu', 'kaki_palsu'],
            ['tgn_palsu', 'd.tgn_palsu', 'tgn_palsu'],
            ['kerusi_roda', 'd.kerusi_roda', 'kerusi_roda'],
            ['tongkat', 'd.tongkat', 'tongkat'],
            ['PD8', 'd.umur', 'umur'],
            ['PD9', 'd.pendidikan', 'pendidikan'],
            ['PD10', 'd.bantuan', 'bantuan'],
            ['PD11', 'd.jumlah', 'jumlah'],
            ['PD12', 'd.kerja_anda', 'kerja_anda'],
            ['PD13', 'd.kerja_psgn', 'kerja_psgn'],
            ['PD14', 'd.pendapatan', 'pendapatan'],
            ['PD15', 'd.alamat', 'alamat'],
            ['PD16', 'd.negeri', 'negeri'],
        ];

        foreach (range(1, 58) as $i) {
            $columns[] = ['Dimensi A' . $i, 'di.a' . $i, 'a' . $i];
        }
        foreach (range(1, 62) as $i) {
            $columns[] = ['Sumber B' . $i, 's.b' . $i, 'b' . $i];
        }
        foreach (range(1, 59) as $i) {
            $columns[] = ['Strategi C' . $i, 'st.c' . $i, 'c' . $i];
        }
        foreach (range(1, 16) as $i) {
            $columns[] = ['Kesan D' . $i, 'k.d' . $i, 'd' . $i];
        }

        $select = [];
        foreach ($columns as $column) {
            if ($column[1] !== null) {
                $select[$column[2]] = $column[1];
            }
        }

        $query = (new \yii\db\Query())
            ->from(['m' => OkuMain::tableName()])
            ->leftJoin(['d' => OkuDemografi::tableName()], 'd.main_id = m.id')
            ->leftJoin(['di' => OkuDimensi::tableName()], 'di.main_id = m.id')
            ->leftJoin(['s' => OkuSumber::tableName()], 's.main_id = m.id')
            ->leftJoin(['st' => OkuStrategi::tableName()], 'st.main_id = m.id')
            ->leftJoin(['k' => OkuKesan::tableName()], 'k.main_id = m.id')
            ->select($select)
            ->orderBy(['m.id' => SORT_DESC]);

        if ($searchModel->validate()) {
            $searchModel->applyFilters($query, 'm', 'd');
        }

        Yii::$app->session->close();

        $filename = 'oku-data-' . date('Y-m-d') . '.csv';

        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        header('Content-Type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Pragma: no-cache');
        header('Expires: 0');

        $out = fopen('php://output', 'w');
        fwrite($out, "\xEF\xBB\xBF");

        $headers = [];
        foreach ($columns as $column) {
            $headers[] = $column[0];
        }
        fputcsv($out, $headers);

        $n = 0;
        foreach ($query->each(500) as $row) {
            $n++;
            $line = [];
            foreach ($columns as $column) {
                if ($column[1] === null) {
                    $line[] = $n;
                    continue;
                }
                $key = $column[2];
                $value = $row[$key] ?? null;
                if ($key === 'created_dt') {
                    $value = $value ? Yii::$app->formatter->asDate($value, 'd/MM/Y') : '-';
                }
                $line[] = $value;
            }
            fputcsv($out, $line);
        }

        fclose($out);
        exit;
    }

    public function actionDataMipk()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new VDataMipkSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mipk', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataMea()
    {

        $this->view->title = "Data EA-Malay";

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new VDataMeaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mea', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataMeaTwo()
    {

        $this->view->title = "Data EA-Malay Version 2";

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new VDataMeaV2Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-mea-two', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataTipi()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new TipiMain();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-tipi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionDataHexaco()
    {
        $searchModel = new Main();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-hexaco', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionExportHexacoCsv()
    {
        $searchModel = new Main();
        $searchModel->loadFilters(Yii::$app->request->queryParams);

        $subDimensionHeaders = [
            'Sincerity Index', 'Fairness Index', 'Greed Index', 'Modesty Index',
            'Fearfulness Index', 'Anxiety Index', 'Dependence Index', 'Sentimentality Index',
            'Social Self Index', 'Social Boldness Index', 'Sociability Index', 'Liveliness Index',
            'Forgiveness Index', 'Gentleness Index', 'Flexibility Index', 'Patience Index',
            'Organization Index', 'Diligence Index', 'Perfectionism Index', 'Prudence Index',
            'Aesthetic Index', 'Inquisitiveness Index', 'Creativity Index', 'Unconventionality Index',
        ];

        $itemGroups = [
            'k' => [1, 10, 'Kejujuran'],
            'e' => [11, 20, 'Emosi'],
            'x' => [21, 30, 'Ekstraversi'],
            'sj' => [31, 40, 'Kebersetujuan'],
            'kh' => [41, 50, 'Keberhemahan'],
            't' => [51, 60, 'Terbuka'],
        ];

        $select = [
            'icno' => 'm.icno',
            'create_dt' => 'm.create_dt',
            'nama_penuh' => 'd.nama_penuh',
            'emel' => 'd.emel',
            'jantina' => 'd.jantina',
            'umur' => 'd.umur',
            'status_kerja' => 'd.status_kerja',
            'status_kerja_lain' => 'd.status_kerja_lain',
            'jawatan' => 'd.jawatan',
            'organisasi' => 'd.organisasi',
            'organisasi_lain' => 'd.organisasi_lain',
            'tarikh_lahir' => 'd.tarikh_lahir',
            'warna' => 'd.warna',
            'darah' => 'd.darah',
            'warganegara' => 'd.warganegara',
            'negara' => 'd.negara',
            'anak_keberapa' => 'd.anak_keberapa',
        ];

        $itemHeaders = [];
        foreach ($itemGroups as $alias => $cfg) {
            list($from, $to, $label) = $cfg;
            for ($n = $from; $n <= $to; $n++) {
                $key = 'item' . $n;
                $select[$key] = $alias . '.' . $key;
                $itemHeaders[$n] = $label . ' Item' . $n;
            }
        }

        for ($i = 1; $i <= 6; $i++) {
            $select['s' . $i] = 'skj.s' . $i;
        }

        $query = (new \yii\db\Query())
            ->from(['m' => Main::tableName()])
            ->leftJoin(['d' => HexacoDemo::tableName()], 'd.main_id = m.id')
            ->leftJoin(['k' => HexacoKejujuran::tableName()], 'k.main_id = m.id')
            ->leftJoin(['e' => HexacoEmosi::tableName()], 'e.main_id = m.id')
            ->leftJoin(['x' => HexacoEkstraversi::tableName()], 'x.main_id = m.id')
            ->leftJoin(['sj' => HexacoKebersetujuan::tableName()], 'sj.main_id = m.id')
            ->leftJoin(['kh' => HexacoKeberhemahan::tableName()], 'kh.main_id = m.id')
            ->leftJoin(['t' => HexacoTerbuka::tableName()], 't.main_id = m.id')
            ->leftJoin(['skj' => HexacoSkj::tableName()], 'skj.main_id = m.id')
            ->select($select)
            ->orderBy(['m.id' => SORT_ASC]);

        $searchModel->applyFilters($query, 'm', 'd');

        Yii::$app->session->close();

        $filename = 'hexaco-data-' . date('Y-m-d') . '.csv';

        while (ob_get_level() > 0) {
            ob_end_clean();
        }

        header('Content-Type: text/csv; charset=UTF-8');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Pragma: no-cache');
        header('Expires: 0');

        $out = fopen('php://output', 'w');
        fwrite($out, "\xEF\xBB\xBF");

        $skjHeaders = [
            'SKJ 1 - Semua tabiat saya baik dan disenangi.',
            'SKJ 2 - Saya sentiasa mengamalkan perkara yang saya katakan.',
            'SKJ 3 - Saya selalu bercakap benar.',
            'SKJ 4 - Saya tidak pernah berkata apa-apa yang tidak baik atau jahat berkenaan orang lain.',
            'SKJ 5 - Saya tidak pernah mengeluarkan kata-kata yang mengguris perasaan orang lain.',
            'SKJ 6 - Saya memenuhi semua janji saya.',
        ];

        $headers = array_merge(
            ['#', 'Tarikh/Masa', 'ICNO'],
            ['Nama Penuh', 'Emel', 'Jantina', 'Umur', 'Status Kerja', 'Status Kerja Lain', 'Jawatan', 'Organisasi', 'Organisasi Lain', 'Tarikh Lahir', 'Warna', 'Darah', 'Warganegara', 'Negara', 'Anak Keberapa'],
            $subDimensionHeaders,
            ['Status PDPA', 'Tarikh PDPA'],
            array_values($itemHeaders),
            $skjHeaders,
            ['Indeks SKJ', 'Tahap SKJ']
        );
        fputcsv($out, $headers);

        $n = 0;
        foreach ($query->each(500) as $row) {
            $n++;

            $subDimensions = Main::indexesFromItems($row);

            $skj = new HexacoSkj();
            $skj->s1 = $row['s1'] ?? null;
            $skj->s2 = $row['s2'] ?? null;
            $skj->s3 = $row['s3'] ?? null;
            $skj->s4 = $row['s4'] ?? null;
            $skj->s5 = $row['s5'] ?? null;
            $skj->s6 = $row['s6'] ?? null;
            if ($skj->isComplete()) {
                $indeksSkj = $skj->getSkor();
                $tahapSkj = HexacoSkj::tahap($indeksSkj);
            } else {
                $indeksSkj = '';
                $tahapSkj = '';
            }

            $line = [];
            $line[] = $n;
            $line[] = $row['create_dt'];
            $line[] = $row['icno'];
            foreach (['nama_penuh', 'emel', 'jantina', 'umur', 'status_kerja', 'status_kerja_lain', 'jawatan', 'organisasi', 'organisasi_lain'] as $key) {
                $line[] = $row[$key] ?? '';
            }
            $line[] = $row['tarikh_lahir']
                ? Yii::$app->formatter->asDate($row['tarikh_lahir'], 'dd/MM/yyyy')
                : '';
            $line[] = $row['warna'];
            $line[] = $row['darah'];
            $line[] = $row['warganegara'];
            $line[] = $row['negara'];
            $line[] = $row['anak_keberapa'];

            foreach ($subDimensions as $value) {
                $line[] = $value === null ? '' : $value;
            }

            $line[] = 'Setuju';
            $line[] = $row['create_dt']
                ? Yii::$app->formatter->asDate($row['create_dt'], 'php:d/m/Y')
                : '';

            for ($i = 1; $i <= 60; $i++) {
                $line[] = $row['item' . $i] ?? '';
            }

            for ($i = 1; $i <= 6; $i++) {
                $line[] = $row['s' . $i] ?? '';
            }

            $line[] = $indeksSkj;
            $line[] = $tahapSkj;

            fputcsv($out, $line);
        }

        fclose($out);
        exit;
    }

    public function actionDataBfi()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new BfiMain();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-bfi', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataSdts()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new SdtsMain();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-sdts', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataEq()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new EqMain();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-eq', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDataEq2()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new EqMain2();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('data-eq2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDomainEq2()
    {

        ini_set('memory_limit', '1024M'); // or you could use 1G

        $searchModel = new EqMain2();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('domain-eq2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionShowResult($id)
    {
        //        $this->checkSession();
        $main_id = $id;

        $this->view->title = "KEPUTUSAN";

        $main = OkuMain::findOne(['id' => $main_id]);

        $model = \app\models\OkuDemografi::findOne(['main_id' => $id]);

        $bhgnA = OkuDimensi::findOne(['main_id' => $main_id]);
        $bhgnB = OkuSumber::findOne(['main_id' => $main_id]);
        $bhgnC = OkuStrategi::findOne(['main_id' => $main_id]);
        $bhgnD = OkuKesan::findOne(['main_id' => $main_id]);

        $groups = OkuGroups::findAll(['type' => 'A']);
        $groupsB = OkuGroups::findAll(['type' => 'B']);
        $groupsC = OkuGroups::findAll(['type' => 'C']);
        $groupsD = OkuGroups::findAll(['type' => 'D']);


        return $this->render('show-result', [
            'model' => $model,
            'bhgnA' => $bhgnA,
            'bhgnB' => $bhgnB,
            'bhgnC' => $bhgnC,
            'bhgnD' => $bhgnD,
            'groups' => $groups,
            'groupsB' => $groupsB,
            'groupsC' => $groupsC,
            'groupsD' => $groupsD,
            'main_id' => $main_id,
        ]);
    }
}
