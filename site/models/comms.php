<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');

class MytestModelComms extends JModelList {

	protected function getListQuery(){
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);
		$query->select($db->quoteName(array('comm_name', 'comm_city', 'comm_pin')));
		$query->from($db->quoteName('#__mytest'));
		return $query;
	}
	
}