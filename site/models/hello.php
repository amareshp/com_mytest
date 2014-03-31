<?php
defined('_JEXEC') or die;

class MytestModelHello extends JModelForm {
	public function getForm($data = array(), $loadData = false) {
		$form = $this->loadForm('com_mytest.hello', 'hello', array('load_data' => $loadData));
		if (empty($form)){
			return false;
		}
		return $form;
	}
	
	protected function loadFormData(){
		// Check the session for previously entered login form data.
		$app  = JFactory::getApplication();
		$data = $app->getUserState('mytest.login.form.data', array());
		return $data;
	}
	
	protected function populateState(){
		$params	= JFactory::getApplication()->getParams('com_mytest');
		$this->setState('params', $params);
	}
	
	public function getMsg(){
		$jinput = JFactory::getApplication()->input;
		$fName     = $jinput->get('first_name');
		$lName     = $jinput->get('last_name');
		if(isset($fName) && isset($lName)){
			$this->msg = 'Hi ' . $fName . ' ' . $lName;
		}
		return $this->msg;
	}
}