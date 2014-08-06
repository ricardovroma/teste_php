<?php
// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../vendor/yiisoft/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';


require_once($yiit);
//print_r(dirname(__FILE__).'/CTestCase.php');
//require_once(dirname(__FILE__).'/CTestCase.php');

class MyCTestCase extends CTestCase
{
	/**
	 * Sets up before each test method runs.
	 * This mainly sets the base URL for the test application.
	 */
	protected function setUp()
	{
		parent::setUp();
		//$this->setBrowserUrl(TEST_BASE_URL);
	}
}


Yii::createWebApplication($config);
