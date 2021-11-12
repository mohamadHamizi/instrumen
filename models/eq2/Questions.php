<?php

namespace app\models\eq2;

use Yii;
use yii\data\ActiveDataProvider;

/**
 * This is the model class for table "eq2_questions".
 *
 * @property int $id
 * @property int $domain
 * @property double $sub_domian
 * @property int $item_no
 * @property string $item
 * @property int $reverse
 */
class Questions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eq2_questions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['domain', 'sub_domain', 'item_no', 'item', 'reverse'], 'required'],
            [['domain', 'item_no', 'reverse'], 'integer'],
            [['sub_domain'], 'number'],
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
            'sub_domain' => 'Sub Domain',
            'item_no' => 'Item No',
            'item' => 'Item',
            'reverse' => 'Reverse',
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

    public static function getMin($domain, $sub_domain)
    {
        $question = Questions::find()->where(['domain' => $domain, 'sub_domain' => $sub_domain])->min('item_no');

        return $question;

    }

    public static function getMax($domain, $sub_domain)
    {
        $question = Questions::find()->where(['domain' => $domain, 'sub_domain' => $sub_domain])->max('item_no');

        return $question;

    }
}
