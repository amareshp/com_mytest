<?php
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>

<!-- $this->items[0] gives an stdClass object whose properties are comm_name, comm_city, comm_pin -->
<?php echo '<h1>Name of first community: ' . $this->items[0]->comm_name . '</h1>' ?>
<?php echo '<h1>Community count: ' . count($this->items) . '</h1>' ?>

<?php echo '<table><tr><th>Community Name</th><th>City</th><th>PIN</th></tr>'; ?>
<?php for($i=0; $i<count($this->items); $i++) : ?>
<?php echo '<tr>'; foreach ($this->items[$i] as $k => $v ) : echo '<td>' . $v . '</td>'; endforeach; echo '</tr>'; ?>
<?php endfor; ?>
<?php echo '</table>' ?>
