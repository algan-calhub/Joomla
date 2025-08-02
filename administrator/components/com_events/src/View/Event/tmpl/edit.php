<?php
defined('_JEXEC') or die;
?>
<form action="<?php echo JUri::getInstance(); ?>" method="post" name="adminForm" id="adminForm" enctype="multipart/form-data">
    <div class="form-horizontal">
        <?php echo $this->form->renderField('title'); ?>
        <?php echo $this->form->renderField('event_date'); ?>
        <?php echo $this->form->renderField('start_time'); ?>
        <?php echo $this->form->renderField('end_time'); ?>
        <?php echo $this->form->renderField('location'); ?>
        <?php echo $this->form->renderField('description'); ?>
        <?php echo $this->form->renderField('extra_info'); ?>
    </div>
    <input type="hidden" name="task" value="event.edit" />
    <?php echo JHtml::_('form.token'); ?>
</form>
