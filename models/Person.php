<?php

namespace matacms\person\models;

use Yii;
use yii\db\ActiveQuery;
use mata\arhistory\behaviors\HistoryBehavior;

/**
 * This is the model class for table "{{%client}}".
 *
 * @property integer $Id
 * @property string $Name
 * @property string $URI
 */
class Person extends \matacms\db\ActiveRecord {
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%matacms_person}}';
    }

    public function behaviors() {
      return [
      HistoryBehavior::className(),
      ];
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['Name', 'URI'], 'required'],
            [['Name'], 'string'],
            [['URI'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'URI' => 'Uri',
        ];
    }

}