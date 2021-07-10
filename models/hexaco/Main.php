<?php

namespace app\models\hexaco;

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
            'icno' => 'Icno',
            'create_dt' => 'Create Dt',
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

    public static function labelSubDimensi()
    {

        return [
            'Keikhlasan',
            'Keadilan',
            'Ketamakan-Pengelakan',
            'Kesopanan',
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
            'Fleksibel',
            'Kesabaran',
            'Organisasi',
            'Ketekunan',
            'Kesempurnaan',
            'Berhemah',
            'Penghargaan estetika',
            'Rasa ingin tahu',
            'Kreativiti',
            'Tidak konvensional',
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
        if ($this->jadual->item10) {
            return  Html::a('<i class="fa fa-eye"></i>', ['tipi/view-result', 'id' => $this->id], ['target' => '_blank']);
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
}
