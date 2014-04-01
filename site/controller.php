<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controller library
jimport('joomla.application.component.controller');
 
/**
 * Hello World Component Controller
 */
class MytestController extends JControllerLegacy {

	
	public function comms($cachable = false, $urlparams = false){
		$document	= JFactory::getDocument();
		$vName   = $this->input->getCmd('view', 'Comms');
		$vFormat = $document->getType();
		$lName   = $this->input->getCmd('layout', 'default');
		$model = $this->getModel($vName);
		
		// set default view if not set
		$input = JFactory::getApplication()->input;
		$input->set('view', $input->getCmd('view', 'Comms'));
		
		$view = $this->getView($vName, $vFormat);
		$view->setModel($model, true);
		$view->setLayout($lName);
		$view->document = $document;
		$view->display();
	}

	public function sayhello($cachable = false, $urlparams = false){
		$document	= JFactory::getDocument();
		$vName   = $this->input->getCmd('view', 'hello');
		$vFormat = $document->getType();
		$lName   = $this->input->getCmd('layout', 'default');
		$model = $this->getModel($vName);
	
		$view = $this->getView($vName, $vFormat);
		$view->setModel($model, true);
		$view->setLayout($lName);
		$view->document = $document;
		$view->display();
	}
	
	
}