<?php 

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