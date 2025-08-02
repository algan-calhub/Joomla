<?php
defined('_JEXEC') or die;
use Joomla\CMS\Language\Text;

$layout = $this->params->get('layout_style', 'classic');
?>
<div class="com-events com-events--<?php echo $layout; ?>">
<?php if (!$this->items) : ?>
    <p><?php echo Text::_('COM_EVENTS_NO_EVENTS'); ?></p>
<?php else : ?>
    <?php foreach ($this->items as $item) : ?>
        <div class="event-entry">
            <?php $this->item = $item; echo $this->loadTemplate('date'); ?>
            <div class="event-content">
                <h3 class="event-title"><?php echo $this->escape($item->title); ?></h3>
                <?php if ($item->description) : ?>
                    <p class="event-description"><?php echo nl2br($this->escape($item->description)); ?></p>
                <?php endif; ?>
                <ul class="event-meta">
                    <?php if ($item->start_time) : ?>
                        <li class="event-start"><?php echo Text::_('COM_EVENTS_START_TIME') . ': ' . $this->escape($item->start_time); ?></li>
                    <?php endif; ?>
                    <?php if ($item->end_time) : ?>
                        <li class="event-end"><?php echo Text::_('COM_EVENTS_END_TIME') . ': ' . $this->escape($item->end_time); ?></li>
                    <?php endif; ?>
                    <?php if ($item->location) : ?>
                        <li class="event-location"><?php echo Text::_('COM_EVENTS_LOCATION') . ': ' . $this->escape($item->location); ?></li>
                    <?php endif; ?>
                    <?php if ($item->extra_info) : ?>
                        <li class="event-info"><?php echo nl2br($this->escape($item->extra_info)); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
</div>
