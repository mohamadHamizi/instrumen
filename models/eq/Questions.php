<?php

namespace app\models\eq;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "eq_questions".
 *
 * @property int $id
 * @property int $domain
 * @property int $reverse
 * @property int $item_no
 * @property string $item
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['domain', 'reverse', 'item'], 'required'],
            [['domain', 'reverse', 'item_no'], 'integer'],
            [['item'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'domain' => 'Domain',
            'reverse' => 'Reverse',
            'item_no' => 'Item No',
            'item' => 'Item',
        ];
    }

    public static function getProvider($domain)
    {
        $provider = new ActiveDataProvider([
            'query' => self::find()->where(['domain' => $domain])->orderBy(['item_no' => SORT_ASC]),
            'pagination' => false,
        ]);

        return $provider;
    }

    public static function getRevItem($domain, $item_no)
    {
        $model = self::find()->where(['domain' => $domain, 'item_no' => $item_no, 'reverse' => 1])->one();

        if ($model) {
            return true;
        }
        return false;
    }
}
