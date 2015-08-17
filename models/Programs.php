<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%programs}}".
 *
 * @property integer $id
 * @property integer $id_predmet
 * @property integer $order
 * @property string $theme
 * @property integer $class
 * @property string $program
 * @property integer $hours
 * @property string $created
 * @property string $modified
 */
class Programs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%programs}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_predmet', 'order', 'class', 'hours'], 'integer'],
            [['theme', 'program'], 'string'],
            [['created', 'modified'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'primary key',
            'id_predmet' => 'id of predmet - linked table predmets',
            'order' => 'order at which theme display',
            'theme' => 'theme of program item',
            'class' => 'class of program',
            'program' => 'program description',
            'hours' => 'hours that theme is taken',
            'created' => 'when created',
            'modified' => 'when modified',
        ];
    }
}
