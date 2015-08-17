<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%predmets}}".
 *
 * @property integer $id
 * @property string $predmet
 */
class Predmets extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%predmets}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['predmet'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'predmet' => 'predmet name',
        ];
    }
}
