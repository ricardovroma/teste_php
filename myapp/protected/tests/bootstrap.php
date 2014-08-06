<?php
// change the following paths if necessary
$yiit=dirname(__FILE__).'/../../../vendor/yiisoft/yii/framework/yiit.php';
$config=dirname(__FILE__).'/../config/test.php';


require_once($yiit);
//print_r(dirname(__FILE__).'/CTestCase.php');
//require_once(dirname(__FILE__).'/CTestCase.php');


/**
 * This file contains the CTestCase class.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @link http://www.yiiframework.com/
 * @copyright 2008-2013 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

//require_once('PHPUnit/Runner/Version.php');
//require_once('PHPUnit/Util/Filesystem.php'); // workaround for PHPUnit <= 3.6.11

spl_autoload_unregister(array('YiiBase','autoload'));
//require_once('PHPUnit/Autoload.php');
spl_autoload_register(array('YiiBase','autoload')); // put yii's autoloader at the end

if (in_array('phpunit_autoload', spl_autoload_functions())) { // PHPUnit >= 3.7 'phpunit_autoload' was obsoleted
    spl_autoload_unregister('phpunit_autoload');
    Yii::registerAutoloader('phpunit_autoload');
}

/**
 * CTestCase is the base class for all test case classes.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @package system.test
 * @since 1.1
 */
abstract class CTestCase extends PHPUnit_Framework_TestCase
{
}




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
