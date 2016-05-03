<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

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

    public static function tableName()
    {
        return '{{%matacms_person}}';
    }

    public function behaviors() {
        return [
            HistoryBehavior::className(),
        ];
    }

    public function rules() {
        return [
            [['Name', 'URI'], 'required'],
            [['Name'], 'string'],
            [['URI'], 'string', 'max' => 255]
        ];
    }

    public function attributeLabels() {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'URI' => 'Uri',
        ];
    }

    public function filterableAttributes() {
        return ["Name"];
    }

}
