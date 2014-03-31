<?php
defined('_JEXEC') or die;

class MytestViewHello extends JViewLegacy {
	protected $form;
	protected $params;
	protected $state;
	
	public function display($tpl = null){
		$this->form		= $this->get('Form');
		$this->state	= $this->get('State');
		$this->params	= $this->state->get('params');
		
		if (count($errors = $this->get('Errors'))){
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		//$this->prepareDocument();
		parent::display($tpl);
	}
}