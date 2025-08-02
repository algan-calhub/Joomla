<?php
defined('_JEXEC') or die;
?>
<form action="index.php?option=com_events&task=import.import" method="post" enctype="multipart/form-data" name="adminForm" id="adminForm">
    <?php echo $this->form->renderField('csvfile'); ?>
    <input type="hidden" name="task" value="import.import" />
    <?php echo JHtml::_('form.token'); ?>
    <button class="btn btn-primary" type="submit"><?php echo JText::_('JIMPORT'); ?></button>
</form>
