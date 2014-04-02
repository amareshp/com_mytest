<?php
//we start with define or die, so this PHP file can't be executed directly
defined('_JEXEC') or die('No direct access.');

//checking to make sure that the current user has a manage permission to this component
if (!JFactory::getUser()->authorise('core.manage', 'com_mytest')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller  = JControllerLegacy::getInstance('Mytest');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
