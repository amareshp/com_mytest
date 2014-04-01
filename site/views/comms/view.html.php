<?php
defined('_JEXEC') or die('Restricted access');
//import Joomla view library
jimport('joomla.application.component.view');

class MytestViewComms extends JViewLegacy {
	public function display($tpl = null){
		//$this->prepareDocument();
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');

		//errors
		if (count($errors = $this->get('Errors'))){
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$this->items = $items;
		$this->pagination = $pagination;
		
		//display the template
		parent::display($tpl);
	}
}