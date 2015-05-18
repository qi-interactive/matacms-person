<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\person\controllers;

use Yii;
use matacms\person\models\Person;
use matacms\person\models\PersonSearch;
use matacms\controllers\module\Controller;

class PersonController extends Controller {

	public function getModel() {
		return new Person();
	}

	public function getSearchModel() {
		return new PersonSearch();
	}
	
}
