<?php

namespace app\models;

use Yii;
use app\models\OkuScoring;
use app\models\OkuDimensi;

/**
 * This is the model class for table "oku_scoring".
 *
 * @property int $id
 * @property int $group_id
 * @property int $skor
 * @property double $scale
 * @property string $tahap
 * @property string $deskripsi
 */
class OkuScoring extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'oku_scoring';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['group_id'], 'required'],
            [['group_id', 'skor'], 'integer'],
            [['scale'], 'number'],
            [['deskripsi'], 'string'],
            [['tahap'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'group_id' => 'Group ID',
            'skor' => 'Skor',
            'scale' => 'Scale',
            'tahap' => 'Tahap',
            'deskripsi' => 'Deskripsi',
        ];
    }

    public static function loadScale($main_id, $type) {

        $groups = OkuGroups::findAll(['type' => $type]);

        $data = [];

        if ($type == 'A') {
            foreach ($groups as $a) {
                $data[] = OkuScoring::findOne(['group_id' => $a->id, 'skor' => OkuDimensi::GroupSkor($a->id, $main_id)])->scale;
            }
        }
        if ($type == 'B') {
            foreach ($groups as $a) {
                $data[] = OkuScoring::findOne(['group_id' => $a->id, 'skor' => OkuSumber::GroupSkor($a->id, $main_id)])->scale;
            }
        }
        if ($type == 'C') {
            foreach ($groups as $a) {
                $data[] = OkuScoring::findOne(['group_id' => $a->id, 'skor' => OkuStrategi::GroupSkor($a->id, $main_id)])->scale;
            }
        }
        if ($type == 'D') {
            foreach ($groups as $a) {
                $data[] = OkuScoring::findOne(['group_id' => $a->id, 'skor' => OkuKesan::GroupSkor($a->id, $main_id)])->scale;
            }
        }

        return $data;
    }
    
    public static function ScaleOnly($shortname, $main_id){
        
        $group = OkuGroups::find()->where(['shortname'=>$shortname])->one();
        
        if($group->type == 'A'){
            $skor = OkuDimensi::GroupSkor($group->id, $main_id);
        }
        
        if($group->type == 'B'){
            $skor = OkuSumber::GroupSkor($group->id, $main_id);
        }
        
        if($group->type == 'C'){
            $skor = OkuStrategi::GroupSkor($group->id, $main_id);
        }
        
        if($group->type == 'D'){
            $skor = OkuKesan::GroupSkor($group->id, $main_id);
        }
        
        $model = OkuScoring::findOne(['group_id' => $group->id, 'skor' => $skor]);
        
        if(!$model){
            return 0;
        }
        
        return $model->scale;
    }

}
