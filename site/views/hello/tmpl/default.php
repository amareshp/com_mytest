<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
unset($this->msg);
?>
<form action="<?php echo JRoute::_('index.php?option=com_mytest&task=sayhello'); ?>" method="post" class="form-horizontal">
	<fieldset class="well">
		<?php foreach ($this->form->getFieldset('credentials') as $field) : ?>
			<div class="control-group">
				<div class="control-label">
					<?php echo $field->label; ?>
				</div>
				<div class="controls">
					<?php echo $field->input; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</fieldset>
	<div class="control-group">
		<div class="control-label">
			<?php echo '<br>'; ?>
		</div>
	<div class="controls">
			<input type="submit" value="Submit">
		</div>
	</div>
</form>

<div class="control-group">
	<?php $this->msg = $this->get('Msg'); if(isset($this->msg)) : echo '<h1><br>' . $this->msg . '</h1>'; endif; ?>
</div>
