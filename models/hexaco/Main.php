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
            'Sincerity Keikhlasan',
            'Fairness Keadilan',
            'Greed-Avoidance Ketamakan-Pengelakan',
            'Modesty Kesopanan',
            'Fearfulness Ketakutan',
            'Anxiety Kebimbangan',
            'Dependence Kebergantungan',
            'Sentimentality Sentimental',
            'Social Self-Esteem Penghargaan Kendiri Sosial',
            'Social Boldness Keberanian Sosial',
            'Sociability Keramahan',
            'Liveliness Keaktifan',
            'Forgiveness Kemaafan',
            'Gentleness Kelembutan',
            'Flexibility Fleksibel',
            'Patience Kesabaran',
            'Organization Organisasi',
            'Diligence Ketekunan',
            'Perfectionism Kesempurnaan',
            'Prudence Berhemah',
            'Aesthetic appreciation Penghargaan estetika',
            'Inquisitiveness Rasa ingin tahu',
            'Creativity Kreativiti',
            'Unconventionality Tidak konvensional',
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
        return $this->FormulaIndeks($this->kejujuran->item6, $this->reverseSkor($this->ekstraversi->item30), $this->terbuka->item54);
    }

    public function getSincerityPurata()
    {
        return $this->FormulaPurata($this->kejujuran->item6, $this->reverseSkor($this->ekstraversi->item30), $this->terbuka->item54);
    }

    public function getFairnessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->emosi->item12), $this->kebersetujuan->item36, $this->reverseSkor($this->terbuka->item60));
    }

    public function getFairnessPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->emosi->item12), $this->kebersetujuan->item36, $this->reverseSkor($this->terbuka->item60));
    }

    public function getGreedIndex()
    {
        return $this->FormulaIndeks($this->emosi->item18, $this->reverseSkor($this->keberhemahan->item42));
    }

    public function getGreedPurata()
    {
        return $this->FormulaPurata($this->emosi->item18, $this->reverseSkor($this->keberhemahan->item42));
    }

    public function getModestyIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->ekstraversi->item24), $this->reverseSkor($this->keberhemahan->item48));
    }

    public function getModestyPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->ekstraversi->item24), $this->reverseSkor($this->keberhemahan->item48));
    }

    public function getFearfulnessIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item5, $this->ekstraversi->item29, $this->reverseSkor($this->terbuka->item53));
    }

    public function getFearfulnessPurata()
    {
        return $this->FormulaPurata($this->kejujuran->item5, $this->ekstraversi->item29, $this->reverseSkor($this->terbuka->item53));
    }

    public function getAnxietyIndex()
    {
        return $this->FormulaIndeks($this->emosi->item11, $this->reverseSkor($this->kebersetujuan->item35));
    }

    public function getAnxietyPurata()
    {
        return $this->FormulaPurata($this->emosi->item11, $this->reverseSkor($this->kebersetujuan->item35));
    }

    public function getDependenceIndex()
    {
        return $this->FormulaIndeks($this->emosi->item17, $this->reverseSkor($this->keberhemahan->item41));
    }

    public function getDependencePurata()
    {
        return $this->FormulaPurata($this->emosi->item17, $this->reverseSkor($this->keberhemahan->item41));
    }

    public function getSentimentalityIndex()
    {
        return $this->FormulaIndeks($this->ekstraversi->item23, $this->keberhemahan->item47, $this->reverseSkor($this->terbuka->item59));
    }

    public function getSentimentalityPurata()
    {
        return $this->FormulaPurata($this->ekstraversi->item23, $this->keberhemahan->item47, $this->reverseSkor($this->terbuka->item59));
    }

    public function getSocialSelfIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item4, $this->reverseSkor($this->ekstraversi->item28), $this->reverseSkor($this->terbuka->item52));
    }

    public function getSocialSelfPurata()
    {
        return $this->FormulaPurata($this->kejujuran->item4, $this->reverseSkor($this->ekstraversi->item28), $this->reverseSkor($this->terbuka->item52));
    }

    public function getSocialBoldnessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item10), $this->kebersetujuan->item34, $this->terbuka->item58);
    }

    public function getSocialBoldnessPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->kejujuran->item10), $this->kebersetujuan->item34, $this->terbuka->item58);
    }

    public function getSociabilityIndex()
    {
        return $this->FormulaIndeks($this->emosi->item16, $this->kebersetujuan->item40);
    }

    public function getSociabilityPurata()
    {
        return $this->FormulaPurata($this->emosi->item16, $this->kebersetujuan->item40);
    }

    public function getLivelinessIndex()
    {
        return $this->FormulaIndeks($this->ekstraversi->item22, $this->reverseSkor($this->keberhemahan->item46));
    }

    public function getLivelinessPurata()
    {
        return $this->FormulaPurata($this->ekstraversi->item22, $this->reverseSkor($this->keberhemahan->item46));
    }

    public function getForgivenessIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item3, $this->ekstraversi->item27);
    }

    public function getForgivenessPurata()
    {
        return $this->FormulaPurata($this->kejujuran->item3, $this->ekstraversi->item27);
    }

    public function getGentlenessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item9), $this->kebersetujuan->item33, $this->terbuka->item51);
    }

    public function getGentlenessPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->kejujuran->item9), $this->kebersetujuan->item33, $this->terbuka->item51);
    }

    public function getFlexibilityIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->emosi->item15), $this->kebersetujuan->item39, $this->reverseSkor($this->terbuka->item57));
    }

    public function getFlexibilityPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->emosi->item15), $this->kebersetujuan->item39, $this->reverseSkor($this->terbuka->item57));
    }

    public function getPatienceIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->ekstraversi->item21), $this->keberhemahan->item45);
    }

    public function getPatiencePurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->ekstraversi->item21), $this->keberhemahan->item45);
    }

    public function getOrganizationIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item2, $this->reverseSkor($this->ekstraversi->item26));
    }

    public function getOrganizationPurata()
    {
        return $this->FormulaPurata($this->kejujuran->item2, $this->reverseSkor($this->ekstraversi->item26));
    }

    public function getDiligenceIndex()
    {
        return $this->FormulaIndeks($this->kejujuran->item8, $this->reverseSkor($this->kebersetujuan->item32));
    }

    public function getDiligencePurata()
    {
        return $this->FormulaPurata($this->kejujuran->item8, $this->reverseSkor($this->kebersetujuan->item32));
    }

    public function getPerfectionismIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->emosi->item14), $this->kebersetujuan->item38, $this->reverseSkor($this->keberhemahan->item50));
    }

    public function getPerfectionismPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->emosi->item14), $this->kebersetujuan->item38, $this->reverseSkor($this->keberhemahan->item50));
    }

    public function getPrudenceIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->emosi->item20), $this->reverseSkor($this->keberhemahan->item44), $this->reverseSkor($this->terbuka->item56));
    }

    public function getPrudencePurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->emosi->item20), $this->reverseSkor($this->keberhemahan->item44), $this->reverseSkor($this->terbuka->item56));
    }

    public function getAestheticIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item1), $this->ekstraversi->item25);
    }

    public function getAestheticPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->kejujuran->item1), $this->ekstraversi->item25);
    }

    public function getInquisitivenessIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->kejujuran->item7), $this->kebersetujuan->item31);
    }

    public function getInquisitivenessPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->kejujuran->item7), $this->kebersetujuan->item31);
    }

    public function getCreativityIndex()
    {
        return $this->FormulaIndeks($this->emosi->item13, $this->kebersetujuan->item37, $this->reverseSkor($this->keberhemahan->item49));
    }

    public function getCreativityPurata()
    {
        return $this->FormulaPurata($this->emosi->item13, $this->kebersetujuan->item37, $this->reverseSkor($this->keberhemahan->item49));
    }

    public function getUnconventionalityIndex()
    {
        return $this->FormulaIndeks($this->reverseSkor($this->emosi->item19), $this->keberhemahan->item43, $this->reverseSkor($this->terbuka->item55));
    }

    public function getUnconventionalityPurata()
    {
        return $this->FormulaPurata($this->reverseSkor($this->emosi->item19), $this->keberhemahan->item43, $this->reverseSkor($this->terbuka->item55));
    }
}
