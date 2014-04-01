<?php
 
// No direct access.
defined('_JEXEC') or die('No direct access');
 
// Include dependancy of the main controllerform class
jimport('joomla.application.component.controllerform');
 
class MytestControllerUpdcomm extends JControllerForm {
	
	public function display($cachable = false, $urlparams = false){
		$document	= JFactory::getDocument();
		$vName   = $this->input->getCmd('view', 'Updcomm');
		$vFormat = $document->getType();
		$lName   = $this->input->getCmd('layout', 'default');
		$model = $this->getModel($vName);
	
		$view = $this->getView($vName, $vFormat);
		$view->setModel($model, true);
		$view->setLayout($lName);
		$view->document = $document;
		$view->display();
	}
	
	public function getModel($name = '', $prefix = '', $config = array('ignore_request' => true)) {
		return parent::getModel($name, $prefix, array('ignore_request' => false));
	}
	
	public function submit() {
		// Check for request forgeries.
        JRequest::checkToken() or jexit(JText::_('JINVALID_TOKEN'));
 
        // Initialise variables.
        $app    = JFactory::getApplication();
        $model  = $this->getModel('updcomm');
 
        // Get the data from the form POST
        $data = JRequest::getVar('jform', array(), 'post', 'array');
 
        // Now update the loaded data to the database via a function in the model
        $upditem        = $model->updItem($data);
 
        // check if ok and display appropriate message.  This can also have a redirect if desired.
        if ($upditem) {
            echo "<h2>Updated community name has been saved</h2>";
        } else {
            echo "<h2>Updated community name failed to be saved</h2>";
        }
 
        return true;
	}
 
}