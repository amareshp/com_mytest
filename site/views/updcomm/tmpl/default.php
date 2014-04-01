<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('behavior.tooltip');
 
?>
    <h2>Update the community info.</h2>
 
    <form class="form-validate" action="<?php echo 'index.php?option=com_mytest&task=submit'; ?>" method="post" id="updcomm" name="updcomm">
                <fieldset>
                <dl>
                    <dt><?php echo $this->form->getLabel('id'); ?></dt>
                <dd><?php echo $this->form->getInput('id'); ?></dd>
                <dt></dt><dd></dd>
                    <dt><?php echo $this->form->getLabel('comm_name'); ?></dt>
                    <dd><?php echo $this->form->getInput('comm_name'); ?></dd>
                <dt></dt><dd></dd>
                <dt></dt>
                <dd><input type="hidden" name="option" value="com_mytest" />
                    <input type="hidden" name="task" value="updcomm.submit" />
                </dd>
                <dt></dt>
                <dd><button type="submit" class="button"><?php echo JText::_('Submit'); ?></button>
                                        <?php echo JHtml::_('form.token'); ?>
                </dd>
                </dl>
        </fieldset>
    </form>
    <div class="clr"></div>