<?php
defined('_JEXEC') or die;
use Joomla\CMS\Date\Date;
use Joomla\CMS\Language\Text;

$date = new Date($item->event_date);
$weekday = $date->format('l', true);
$month = $date->format('F', true);
$day = $date->format('j');
?>
<div class="event-date">
    <span class="event-day"><?php echo $day; ?></span>
    <span class="event-weekday"><?php echo Text::_($weekday); ?></span>
    <span class="event-month"><?php echo Text::_($month); ?></span>
</div>
