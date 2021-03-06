<?php
namespace tests\twikilib\form;

use twikilib\form\FormModel;
use twikilib\core\ITopic;
use twikilib\core\Config;
use twikilib\core\FilesystemDB;

/**
 * @author Viliam Simko
 */
class FormModelTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var twikilib\core\ITopicFactory
	 */
	private $topicFactory;

	protected function setUp() {
		$twikiConfig = new Config('dummy-twikilib-config.ini');
		$this->topicFactory = new FilesystemDB($twikiConfig);
	}

	public function testFormModelDirectly() {
		$formModel = new FormModel('UserForm', $this->topicFactory);

		$this->assertEquals('UserForm', $formModel->getFormName());
		$this->assertTrue( $formModel->isFieldDefined('City') );

		// First Name field
		$fieldType = $formModel->getTypeByFieldName('First Name');
		$this->assertEquals('First Name', $fieldType->name);
		$this->assertEquals('text', $fieldType->datatype);
		$this->assertEquals('40', $fieldType->size);

		// Homepage
		$fieldType = $formModel->getTypeByFieldName('Homepage');
		$this->assertEquals('textarea', $fieldType->datatype);
    }
}