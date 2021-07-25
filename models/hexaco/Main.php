<?php

namespace app\models\hexaco;

use kartik\popover\PopoverX;
use Yii;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;

/**
 * This is the model class for table "hexaco_main".
 *
 * @property int $id
 * @property string $icno
 * @property string $create_dt
 */
class Main extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hexaco_main';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['icno'], 'required'],
            [['create_dt'], 'safe'],
            [['icno'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icno' => 'ICNO',
            'create_dt' => 'Tarikh/Masa',
            'pdpaStatus' => 'Status PDPA',
            'pdpaTarikh' => 'Tarikh PDPA',
            'btnView' => 'Perician',
            'sincerity' => 'Sincerity Keikhlasan',
            'fairness' => 'Fairness Keadilan',
            'greed' => 'Greed-Avoidance Ketamakan-Pengelakan',
            'modesty' => 'Modesty Kesopanan',
            'fearfulness' => 'Fearfulness Ketakutan',
            'anxiety' => 'Anxiety Kebimbangan',
            'dependence' => 'Dependence Kebergantungan',
            'sentimentality' => 'Sentimentality Sentimental',
            'socialSelf' => 'Social Self-Esteem Penghargaan Kendiri Sosial',
            'socialBoldness' => 'Social Boldness Keberanian Sosial',
            'socialibility' => 'Sociability Keramahan',
            'liveliness' => 'Liveliness Keaktifan',
            'forgiveness' => 'Forgiveness Kemaafan',
            'gentleness' => 'Gentleness Kelembutan',
            'flexibility' => 'Flexibility Fleksibel',
            'patience' => 'Patience Kesabaran',
            'organization' => 'Organization Organisasi',
            'diligence' => 'Diligence Ketekunan',
            'perfectionism' => 'Perfectionism Kesempurnaan',
            'prudence' => 'Prudence Berhemah',
            'aesthetic' => 'Aesthetic appreciation Penghargaan estetika',
            'inquisitiveness' => 'Inquisitiveness Rasa ingin tahu',
            'creativity' => 'Creativity Kreativiti',
            'unconventionality' => 'Unconventionality Tidak konvensional',

        ];
    }

    public static function labelSubDimensi($index)
    {

        $arr = [
            'Keikhlasan',
            'Keadilan',
            'Penghindaran-Ketamakan',
            'Kesederhanaan',
            'Ketakutan',
            'Kebimbangan',
            'Kebergantungan',
            'Sentimental',
            'Penghargaan Kendiri Sosial',
            'Keberanian Sosial',
            'Keramahan',
            'Keaktifan',
            'Kemaafan',
            'Kelembutan',
            'Fleksibiliti',
            'Kesabaran',
            'Organisasi',
            'Ketekunan',
            'Kesempurnaan',
            'Berhemah',
            'Penghayatan estetika',
            'Rasa ingin tahu',
            'Kreativiti',
            'Tidak konvensional',
        ];


        return $arr[$index];
    }

    public static function indeksSubDimensi($id, $index)
    {
        $model = self::findOne($id);

        $arr = [
            $model->getSincerityIndex(),
            $model->getFairnessIndex(),
            $model->getGreedIndex(),
            $model->getModestyIndex(),
            $model->getFearfulnessIndex(),
            $model->getAnxietyIndex(),
            $model->getDependenceIndex(),
            $model->getSentimentalityIndex(),
            $model->getSocialSelfIndex(),
            $model->getSocialBoldnessIndex(),
            $model->getSociabilityIndex(),
            $model->getLivelinessIndex(),
            $model->getForgivenessIndex(),
            $model->getGentlenessIndex(),
            $model->getFlexibilityIndex(),
            $model->getPatienceIndex(),
            $model->getOrganizationIndex(),
            $model->getDiligenceIndex(),
            $model->getPerfectionismIndex(),
            $model->getPrudenceIndex(),
            $model->getAestheticIndex(),
            $model->getInquisitivenessIndex(),
            $model->getCreativityIndex(),
            $model->getUnconventionalityIndex(),
        ];

        return $arr[$index];
    }

    public static function tahapColor($indeks)
    {

        //0 - 32.9 merah
        //33 - 65.9 kuning
        //66 - 100 biru
        if ($indeks >= 0 && $indeks <= 32.9) {
            $color = 'progress-bar-red';
        } else if ($indeks >= 33 && $indeks <= 65.9) {
            $color = 'progress-bar-yellow';
        } else if ($indeks >= 66 && $indeks <= 100) {
            $color = 'progress-bar-default';
        }

        return $color;
    }

    public static function FormulaTahap($indeks)
    {

        $tahap = 'Tiada';

        if ($indeks >= 0 && $indeks <= 24.9) {
            $tahap = 'Sangat Rendah';
        } else if ($indeks >= 25 && $indeks <= 49.9) {
            $tahap = 'Rendah';
        } else if ($indeks >= 50 && $indeks <= 74.9) {
            $tahap = 'Tinggi';
        } else if ($indeks >= 75 && $indeks <= 100) {
            $tahap = 'Sangat Tinggi';
        }

        return $tahap;
    }

    public static function labelDimensi()
    {

        return [
            'Kejujuran-Kerendahan Hati',
            'Emosi',
            'Ekstraversi',
            'Kebersetujuan',
            'Keberhemahan',
            'Terbuka kepada Pengalaman',
        ];
    }

    public static function dimensiAnda($id)
    {
        $model = self::findOne($id);

        return [
            $model->getDimensiKejujuran(),
            $model->getDimensiEmosi(),
            $model->getDimensiEkstraversi(),
            $model->getDimensiKebersetujuan(),
            $model->getDimensiKeberhemahan(),
            $model->getDimensiTerbuka(),
        ];
    }

    public static function resultAnda($id)
    {
        $model = self::findOne($id);

        return [
            $model->getSincerityIndex(),
            $model->getFairnessIndex(),
            $model->getGreedIndex(),
            $model->getModestyIndex(),
            $model->getFearfulnessIndex(),
            $model->getAnxietyIndex(),
            $model->getDependenceIndex(),
            $model->getSentimentalityIndex(),
            $model->getSocialSelfIndex(),
            $model->getSocialBoldnessIndex(),
            $model->getSociabilityIndex(),
            $model->getLivelinessIndex(),
            $model->getForgivenessIndex(),
            $model->getGentlenessIndex(),
            $model->getFlexibilityIndex(),
            $model->getPatienceIndex(),
            $model->getOrganizationIndex(),
            $model->getDiligenceIndex(),
            $model->getPerfectionismIndex(),
            $model->getPrudenceIndex(),
            $model->getAestheticIndex(),
            $model->getInquisitivenessIndex(),
            $model->getCreativityIndex(),
            $model->getUnconventionalityIndex(),
        ];
    }

    public function getDimensiKejujuran()
    {
        return $this->FormulaDimensi(
            $this->getSincerityIndex(),
            $this->getFairnessIndex(),
            $this->getGreedIndex(),
            $this->getModestyIndex()
        );
    }
    public function getDimensiEmosi()
    {
        return $this->FormulaDimensi(
            $this->getFearfulnessIndex(),
            $this->getAnxietyIndex(),
            $this->getDependenceIndex(),
            $this->getSentimentalityIndex()
        );
    }

    public function getDimensiEkstraversi()
    {
        return $this->FormulaDimensi(
            $this->getSocialSelfIndex(),
            $this->getSocialBoldnessIndex(),
            $this->getSociabilityIndex(),
            $this->getLivelinessIndex(),
        );
    }
    public function getDimensiKebersetujuan()
    {
        return $this->FormulaDimensi(
            $this->getForgivenessIndex(),
            $this->getGentlenessIndex(),
            $this->getFlexibilityIndex(),
            $this->getPatienceIndex()
        );
    }
    public function getDimensiKeberhemahan()
    {
        return $this->FormulaDimensi(
            $this->getOrganizationIndex(),
            $this->getDiligenceIndex(),
            $this->getPerfectionismIndex(),
            $this->getPrudenceIndex()
        );
    }
    public function getDimensiTerbuka()
    {
        return $this->FormulaDimensi(
            $this->getAestheticIndex(),
            $this->getInquisitivenessIndex(),
            $this->getCreativityIndex(),
            $this->getUnconventionalityIndex()
        );
    }

    public function getPdpaStatus()
    {
        return "Setuju";
    }

    public function getPdpaTarikh()
    {
        return Yii::$app->formatter->asDate($this->create_dt, 'php:d/m/Y'); // 2014-10-06;
    }

    public function getBtnView()
    {
        if ($this->terbuka->item60) {
            return  Html::a('<i class="fa fa-eye"></i>', ['hexaco/view-result', 'id' => $this->id], ['target' => '_blank']);
        }

        return null;
    }

    public function getKejujuran()
    {
        return $this->hasOne(Kejujuran::className(), ['main_id' => 'id']);
    }
    public function getEmosi()
    {
        return $this->hasOne(Emosi::className(), ['main_id' => 'id']);
    }
    public function getEkstraversi()
    {
        return $this->hasOne(Ekstraversi::className(), ['main_id' => 'id']);
    }
    public function getKebersetujuan()
    {
        return $this->hasOne(Kebersetujuan::className(), ['main_id' => 'id']);
    }
    public function getKeberhemahan()
    {
        return $this->hasOne(Keberhemahan::className(), ['main_id' => 'id']);
    }
    public function getTerbuka()
    {
        return $this->hasOne(Terbuka::className(), ['main_id' => 'id']);
    }

    public function getDemo()
    {
        return $this->hasOne(Demo::className(), ['main_id' => 'id']);
    }

    public function search($params)
    {
        $query = self::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        return $dataProvider;
    }

    public static function reverseSkor($skorItem)
    {

        switch ($skorItem) {
            case 1:
                $reverse = 5;
                break;
            case 2:
                $reverse = 4;
                break;
            case 3:
                $reverse = 3;
                break;
            case 4:
                $reverse = 2;
                break;
            case 5:
                $reverse = 1;
                break;
        }

        return $reverse;
    }



    public static function FormulaDimensi($sub1, $sub2, $sub3, $sub4)
    {
        $maxSkor = 400;
        $minSkor = 0;
        $jumlahSkor = $sub1 + $sub2 + $sub3 + $sub4;

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 0);
    }

    public static function FormulaIndeks($itemSkor1, $itemSkor2, $itemSkor3 = null)
    {
        $maxSkor = 10;
        $minSkor = 2;
        $jumlahSkor = $itemSkor1 + $itemSkor2;

        if ($itemSkor3) {
            $maxSkor = 15;
            $minSkor = 3;
            $jumlahSkor = $itemSkor1 + $itemSkor2 + $itemSkor3;
        }

        $indeks = ($jumlahSkor - $minSkor) / ($maxSkor - $minSkor) * 100;

        return round($indeks, 0);
    }

    public static function FormulaPurata($itemSkor1, $itemSkor2, $itemSkor3 = null)
    {
        $per = 2;
        $jumlahSkor = $itemSkor1 + $itemSkor2;

        if ($itemSkor3) {
            $per = 3;
            $jumlahSkor = $itemSkor1 + $itemSkor2 + $itemSkor3;
        }

        $purata = $jumlahSkor / $per;

        return round($purata, 0);
    }

    public function getSincerityIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item1, $this->reverseSkor($this->kejujuran->item2), $this->kejujuran->item3);
    }

    public function getFairnessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item4), $this->kejujuran->item5, $this->reverseSkor($this->kejujuran->item6));
    }

    public function getGreedIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item7, $this->reverseSkor($this->kejujuran->item8));
    }

    public function getModestyIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item9), $this->reverseSkor($this->kejujuran->item10));
    }


    public function getFearfulnessIndex()
    {
        return $this->FormulaIndeks($this->emosi->item11, $this->emosi->item12, $this->reverseSkor($this->emosi->item13));
    }


    public function getAnxietyIndex()
    {
        return $this->FormulaIndeks($this->emosi->item14, $this->reverseSkor($this->emosi->item15));
    }

    public function getDependenceIndex()
    {
        return $this->FormulaIndeks($this->emosi->item16, $this->reverseSkor($this->emosi->item17));
    }


    public function getSentimentalityIndex()
    {
        return $this->FormulaIndeks($this->emosi->item18, $this->emosi->item19, $this->reverseSkor($this->emosi->item20));
    }

    public function getSocialSelfIndex()
    {
        return $this->FormulaIndeks($this->ekstraversi->item21, $this->reverseSkor($this->ekstraversi->item22), $this->reverseSkor($this->ekstraversi->item23));
    }

    public function getSocialBoldnessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->ekstraversi->item24), $this->ekstraversi->item25, $this->ekstraversi->item26);
    }

    public function getSociabilityIndex()
    {
        return $this->FormulaIndeks($this->ekstraversi->item27, $this->ekstraversi->item28);
    }

    public function getLivelinessIndex()
    {
        return $this->FormulaIndeks($this->ekstraversi->item29, $this->reverseSkor($this->ekstraversi->item30));
    }

    public function getForgivenessIndex()
    {
        return $this->FormulaIndeks($this->kebersetujuan->item31, $this->kebersetujuan->item32);
    }

    public function getGentlenessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kebersetujuan->item33), $this->kebersetujuan->item34, $this->kebersetujuan->item35);
    }

    public function getFlexibilityIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kebersetujuan->item36), $this->kebersetujuan->item37, $this->reverseSkor($this->kebersetujuan->item38));
    }

    public function getPatienceIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kebersetujuan->item39), $this->kebersetujuan->item40);
    }

    public function getOrganizationIndex()
    {
        return $this->FormulaIndeks($this->keberhemahan->item41, $this->reverseSkor($this->keberhemahan->item42));
    }

    public function getDiligenceIndex()
    {
        return $this->FormulaIndeks($this->keberhemahan->item43, $this->reverseSkor($this->keberhemahan->item44));
    }

    public function getPerfectionismIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->keberhemahan->item45), $this->keberhemahan->item46, $this->reverseSkor($this->keberhemahan->item47));
    }

    public function getPrudenceIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->keberhemahan->item48), $this->reverseSkor($this->keberhemahan->item49), $this->reverseSkor($this->keberhemahan->item50));
    }

    public function getAestheticIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->terbuka->item51), $this->terbuka->item52);
    }

    public function getInquisitivenessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->terbuka->item53), $this->terbuka->item54);
    }

    public function getCreativityIndex()
    {
        return $this->FormulaIndeks($this->terbuka->item55, $this->terbuka->item56, $this->reverseSkor($this->terbuka->item57));
    }

    public function getUnconventionalityIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->terbuka->item58), $this->terbuka->item59, $this->reverseSkor($this->terbuka->item60));
    }

    public static function popX($header, $label, $des)
    {
        return PopoverX::widget([
            'header' => $header,
            'size' => PopoverX::SIZE_LARGE,
            'type' => PopoverX::TYPE_INFO,
            'placement' => PopoverX::ALIGN_RIGHT,
            'content' => self::deskripsi($des),
            'toggleButton' => ['label' => $label, 'class' => ''],
        ]);
    }



    public static function deskripsi($val)
    {

        if ($val == 1) {
            return
                '<p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> dalam skala Kejujuran-Kerendahan Hati mengelak memanipulasi orang lain demi keuntungan peribadi, tidak mempunyai dorongan untuk melanggar peraturan, tidak berminat dengan kekayaan dan kemewahan, dan tidak menganggap diri mereka berhak diangkat ke tahap status sosial yang tinggi.</p>

                <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini akan memuji orang lain untuk mendapatkan apa yang mereka ingini, cenderung untuk melanggar peraturan demi keuntungan peribadi, didorong oleh keuntungan material, dan mempunyai perasaan penting-diri yang kuat.</p>';
        }

        if ($val == 1.1) {
            return
                '<p><strong>1.1 Skala Keikhlasan</strong> menilai kecenderungan untuk bersikap ikhlas dalam hubungan interpersonal. Individu dengan skor rendah akan memuji orang lain atau berpura-pura menyukai mereka untuk memperoleh bantuan, manakala individu yang mempunyai skor tinggi tidak sanggup memanipulasi orang lain.</p>';
        }

        if ($val == 1.2) {
            return
                '<p><strong>1.2 Skala Keadilan</strong> menilai kecenderungan untuk mengelakkan penipuan dan rasuah. Individu dengan skor rendah bersedia memperoleh keuntungan dengan menipu atau mencuri, manakala individu yang mempunyai skor tinggi tidak akan mengambil kesempatan terhadap individu lain atau masyarakat pada umumnya.</p>';
        }
        if ($val == 1.3) {
            return
                '<p><strong>1.3 Skala Penghindaran Ketamakan</strong> menilai kecenderungan untuk tidak berminat dalam memiliki kekayaan berlimpahan, barangan mewah, dan tanda-tanda status sosial yang tinggi. Individu dengan skor rendah mahu menikmati dan memperlihatkan kekayaan dan keistimewaan, manakala individu yang mempunyai skor tinggi tidak didorong oleh kemewahan atau pertimbangan status sosial.</p>';
        }
        if ($val == 1.4) {
            return
                '<p><strong>1.4 Skala Kesederhanaan</strong> menilai kecenderungan untuk bersikap sederhana dan rendah diri. Individu dengan skor rendah menganggap diri mereka unggul dan berhak mendapat keistimewaan yang tidak dimiliki orang lain, manakala individu yang mempunyai skor tinggi menganggap diri mereka sebagai orang biasa tanpa hak mendapat layanan istimewa.</p>';
        }


        if ($val == 2) {

            return '<p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Emosi mengalami ketakutan terhadap bahaya fizikal, mengalami kegelisahan sebagai tindak balas terhadap tekanan hidup, mempunyai perasaan memerlukan sokongan emosi daripada orang lain, dan merasa empati dan hubungan sentimental dengan orang lain.</p>

            <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini tidak terganggu oleh prospek bahaya fizikal, mempunyai tahap kebimbangan yang rendah walaupun dalam situasi tertekan, tidak ada keperluan berkongsi kebimbangan mereka dengan orang lain, dan berasa terasing secara emosi dengan orang lain.</p>';
        }

        if ($val == 2.1) {
            return
                ' <p><strong>2.1 Skala Ketakutan</strong> menilai kecenderungan untuk mengalami ketakutan. Individu dengan skor rendah mempunyai kurang perasaan takut akan kecederaan dan secara amnya kuat, berani, dan tidak sensitif terhadap kesakitan fizikal, manakala individu yang mempunyai skor tinggi sangat cenderung untuk mengelak kecederaan fizikal.';
        }
        if ($val == 2.2) {
            return
                '<p><strong>2.2 Skala Kebimbangan</strong> menilai kecenderungan untuk bimbang dalam pelbagai konteks. Individu dengan skor rendah kurang tertekan dalam menghadapi kesukaran, manakala individu yang mempunyai skor tinggi cenderung mengalami tekanan walaupun dengan masalah yang agak kecil.';
        }
        if ($val == 2.3) {
            return
                '<p><strong>2.3 Skala Kebergantungan</strong> menilai keperluan mendapat sokongan emosi daripada orang lain. Individu dengan skor rendah mempunyai keyakinan diri dan berupaya menangani masalah tanpa bantuan atau nasihat orang lain, manakala individu yang mempunyai skor tinggi ingin berkongsi masalah mereka dengan orang lain yang akan memberi dorongan dan penghiburan.</p>';
        }
        if ($val == 2.4) {
            return
                '<p><strong>2.4 Skala Sentimental</strong> menilai kecenderungan untuk membentuk ikatan emosi yang kuat dengan orang lain. Individu dengan skor rendah kurang beremosi ketika mengucapkan selamat tinggal atau sebagai reaksi kepada keprihatinan orang lain, manakala individu yang mempunyai skor tinggi merasa keterikatan emosi yang kuat dan kepekaan empati terhadap perasaan orang lain.</p>';
        }

        if ($val == 3) {
            return '<p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Emosi mengalami ketakutan terhadap bahaya fizikal, mengalami kegelisahan sebagai tindak balas terhadap tekanan hidup, mempunyai perasaan memerlukan sokongan emosi daripada orang lain, dan merasa empati dan hubungan sentimental dengan orang lain.</p>
            
            <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini tidak terganggu oleh prospek bahaya fizikal, mempunyai tahap kebimbangan yang rendah walaupun dalam situasi tertekan, tidak ada keperluan berkongsi kebimbangan mereka dengan orang lain, dan berasa terasing secara emosi dengan orang lain.</p>';
        }

        if ($val == 3.1) {
            return
                '<p><strong>3.1 Skala Penghargaan Kendiri Sosial</strong> menilai kecenderungan untuk bersikap positif terhadap diri sendiri, terutama dalam konteks sosial. Individu dengan skor tinggi umumnya berpuas hati dengan diri mereka sendiri dan menganggap diri mereka mempunyai kualiti yang disukai, manakala individu yang mempunyai skor rendah cenderung melihat diri mereka sebagai tidak berguna dan tidak popular.</p>';
        }
        if ($val == 3.2) {
            return
                '<p><strong>3.2 Skala Keberanian Sosial</strong> menilai keselesaan atau keyakinan seseorang dalam pelbagai situasi sosial. Individu dengan skor rendah berasa malu atau janggal dalam aspek kepimpinan atau ketika berucap di khalayak ramai, manakala individu yang mempunyai skor tinggi bersedia mendekati orang yang tidak dikenali dan mampu bersuara dalam kumpulan.</p>';
        }
        if ($val == 3.3) {
            return
                '<p><strong>3.3 Skala Keramahan</strong> menilai kecenderungan menyukai perbualan, interaksi sosial, dan majlis keramaian. Individu dengan skor rendah pada amnya lebih suka melakukan aktiviti bersendirian dan tidak gemar perbualan, manakala individu yang mempunyai skor tinggi gemar bercakap, berziarah, dan menyambut keramaian bersama orang lain.';
        }
        if ($val == 3.4) {
            return
                '<p><strong>3.4 Skala Keaktifan</strong> menilai tahap keterujaan dan tenaga seseorang. Individu dengan skor rendah cenderung kepada perasaan tidak ceria atau dinamik, manakala individu yang mempunyai skor tinggi biasanya mempunyai sifat optimis dan semangat yang tinggi.</p>';
        }

        if ($val == 4) {

            return '<p>Individu dengan <font class="skor_tinggi">skor sangat tinggi </font> skala Kebersetujuan memaafkan kesalahan yang ditujukan kepada mereka, bersikap lembut dalam menilai orang lain, bersedia berkompromi dan bekerjasama dengan orang lain, dan mudah mengawal perasaan marah mereka.</p>


            <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini menyimpan dendam terhadap orang yang telah melukakan mereka, agak kritikal akan kekurangan orang lain, keras kepala dalam mempertahankan pandangan mereka, dan cepat marah sebagai tindak balas kepada penganiayaan.</p>';
        }

        if ($val == 4.1) {

            return
                '<p><strong>4.1 Skala Kemaafan</strong> menilai kesediaan seseorang untuk mempercayai dan menerima mereka yang mungkin pernah berbuat salah kepadanya. Individu dengan skor rendah cenderung menyimpan dendam terhadap mereka yang telah menyinggung perasaan mereka, manakala individu yang mempunyai skor tinggi biasanya bersedia untuk mempercayai dan berbaik semula dengan mereka yang telah menganiayanya.';
        }

        if ($val == 4.2) {

            return
                '<p><strong>4.2 Skala Kelembutan</strong> menilai kecenderungan untuk bersikap lembut dan bertolak ansur apabila berurusan dengan orang lain. Individu dengan skor rendah cenderung menjadi kritikal dalam penilaian mereka terhadap orang lain, manakala individu yang mempunyai skor tinggi berat hati menilai orang lain dengan kasar.';
        }

        if ($val == 4.3) {

            return
                '<p><strong>4.3 Skala Fleksibiliti</strong> menilai kesediaan seseorang untuk berkompromi dan bekerjasama dengan orang lain. Individu dengan skor rendah dilihat sebagai keras kepala dan bersedia untuk berdebat, manakala individu yang mempunyai skor tinggi mengelak perdebatan dan mempertimbangkan cadangan orang lain, walaupun ianya mungkin tidak masuk akal.';
        }

        if ($val == 4.4) {

            return
                '<p><strong>4.4 Skala Kesabaran</strong> menilai kecenderungan untuk kekal tenang dan tidak menjadi marah. Individu dengan skor rendah cenderung untuk cepat marah, manakala individu dengan skor tinggi mempunyai ambang kesabaran tinggi untuk menjadi marah atau meluahkan kemarahan.';
        }

        if ($val == 5) {

            return '<p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Keberhemahan mengatur masa dan persekitaran fizikal mereka, bekerja dengan cara berdisiplin untuk mencapai tujuan mereka, berusaha untuk ketepatan dan kesempurnaan tugas mereka, dan teliti dalam membuat keputusan.</p>

            <p>Sebaliknya individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini cenderung kepada tidak memperdulikan persekitaran atau jadual yang teratur, mengelak tugas yang sukar atau matlamat yang mencabar, berpuas hati dengan kerja yang mengandungi beberapa kesalahan, dan membuat keputusan mengikut gerak hati atau tanpa berfikir panjang.</p>';
        }

        if ($val == 5.1) {
            return
                '<p><strong>5.1 Skala Organisasi</strong> menilai kecenderungan untuk mencari ketertiban, terutama dalam persekitaran fizikal seseorang. Individu dengan skor rendah cenderung leka dan selekeh, manakala individu yang mempunyai skor tinggi memastikan keadaan kemas dan lebih suka pendekatan berstruktur dalam melaksanakan tugas.';
        }
        if ($val == 5.2) {
            return
                '<p><strong>5.2 Skala Ketekunan</strong> menilai kecenderungan untuk bekerja keras. Individu dengan skor rendah mempunyai disiplin diri yang rendah dan tidak bermotivasi untuk mencapai sesuatu, manakala individu yang mempunyai skor tinggi ada "etika kerja" yang tinggi dan bersedia melaksanakan tugas sedaya-upaya.';
        }
        if ($val == 5.3) {
            return
                '<p><strong>5.3 Skala Kesempurnaan</strong> menilai kecenderungan untuk ketelitian dan mementingkan perincian. Individu dengan skor rendah boleh menerima beberapa kesalahan dalam kerja mereka dan biasanya mengabaikan perincian kecil, manakala individu yang mempunyai skor tinggi meneliti untuk mengesan sebarang kesilapan dan potensi penambahbaikan.';
        }
        if ($val == 5.4) {
            return
                '<p><strong>5.4 Skala Berhemah</strong> menilai kecenderungan untuk berunding dengan teliti dan menghalang impuls. Individu dengan skor rendah bertindak mengikut gerak hati dan biasanya tidak mempertimbangkan akibat, manakala individu yang mempunyai skor tinggi mempertimbangkan pilihan mereka dengan berhati-hati dan biasanya berwaspada dan mengawal diri.';
        }

        if ($val == 6) {
            return '<p>Individu dengan <font class="skor_tinggi">skor yang sangat tinggi</font> pada skala Keterbukaan untuk Pengalaman tertarik dengan keindahan seni dan alam semula jadi, ingin tahu tentang pelbagai bidang ilmu pengetahuan, menggunakan imaginasi mereka secara bebas dalam kehidupan seharian, dan berminat dengan idea atau individu yang unik.</p>

            <p>Sebaliknya, individu dengan <font class="skor_rendah">skor yang sangat rendah</font> pada skala ini tidak teruja dengan karya seni, mempunyai sifat ingin tahu intelektual yang rendah, menghindari aktiviti kreatif, dan mempunyai minat rendah terhadap idea-idea radikal atau tidak konvensional.</p>';
        }

        if ($val == 6.1) {
            return
                '<p><strong>6.1 Skala Penghayatan Estetika</strong> menilai keseronokan seseorang terhadap keindahan dalam seni dan alam semula jadi. Individu dengan skor rendah tidak berminat menghayati karya seni atau keajaiban semula jadi, manakala individu dengan skor tinggi mempunyai penghayatan mendalam terhadap pelbagai bentuk seni dan keajaiban alam.';
        }
        if ($val == 6.2) {
            return
                '<p><strong>6.2 Skala Rasa Ingin Tahu</strong> menilai kecenderungan untuk mencari maklumat mengenai, dan pengalaman dengan, dunia semula jadi dan manusia. Individu dengan skor rendah memiliki sifat ingin tahu yang rendah tentang sains semula jadi atau sosial, manakala individu yang mempunyai skor tinggi gemar membaca dan mengembara.';
        }
        if ($val == 6.3) {
            return
                '<p><strong>6.3 Skala Kreativiti</strong> menilai kecenderungan seseorang terhadap inovasi dan eksperimen. Individu dengan skor rendah tidak teruja dengan idea baru, manakala individu yang mempunyai skor tinggi secara aktif mencari jalan penyelesaian masalah yang baru dan mengekpresikan diri dalam seni.';
        }
        if ($val == 6.4) {
            return
                '<p><strong>6.4 Skala Tidak Konvensional</strong> menilai kecenderungan untuk menerima sesuatu di luar kebiasaan. Individu dengan skor rendah menghindari orang yang eksentrik atau berlainan, manakala individu yang mempunyai skor tinggi terbuka kepada idea-idea yang mungkin kelihatan aneh atau radikal.';
        }
    }
}
