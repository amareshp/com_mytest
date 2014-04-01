<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

//fetch the view
$view = JRequest::getVar( 'view' , 'null' );
//fetch the right controller
if( $view == 'null' ){
	// Get an instance of the controller prefixed by Mytest
	$controller = JControllerLegacy::getInstance('Mytest');
} else {
	require_once( JPATH_COMPONENT . '/controllers/' . $view . '.php' );
	// initiate the contoller class and execute the controller
	$controllerClass = 'MytestController' . ucfirst($view);
	$controller = new $controllerClass;
}

 
// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task', 'display'));
 
// Redirect if set by the controller
$controller->redirect();
