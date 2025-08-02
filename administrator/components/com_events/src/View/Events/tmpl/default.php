<?php
defined('_JEXEC') or die;
?>
<form action="index.php?option=com_events&view=events" method="post" id="adminForm" name="adminForm">
    <table class="table table-striped">
        <thead>
        <tr>
            <th><?php echo JText::_('JGLOBAL_TITLE'); ?></th>
            <th><?php echo JText::_('COM_EVENTS_EVENT_DATE'); ?></th>
            <th><?php echo JText::_('JGLOBAL_ID'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->items as $i => $item) : ?>
            <tr>
                <td><a href="<?php echo 'index.php?option=com_events&task=event.edit&id=' . (int) $item->id; ?>"><?php echo $this->escape($item->title); ?></a></td>
                <td><?php echo JHtml::_('date', $item->event_date, JText::_('DATE_FORMAT_LC3')); ?></td>
                <td><?php echo (int) $item->id; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php echo $this->pagination->getListFooter(); ?>
    <input type="hidden" name="task" value="" />
    <?php echo JHtml::_('form.token'); ?>
</form>
