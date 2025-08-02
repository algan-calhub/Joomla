<?php

namespace Joomla\Component\Events\Site\Model;

use Joomla\CMS\MVC\Model\ListModel;
use Joomla\CMS\Factory;
use Joomla\Database\ParameterType;

class EventsModel extends ListModel
{
    protected function populateState($ordering = 'event_date', $direction = 'ASC')
    {
        parent::populateState($ordering, $direction);
        $this->setState('filter.start_date', Factory::getDate()->format('Y-m-d'));
    }

    protected function getListQuery()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true)
            ->select('*')
            ->from($db->quoteName('#__evententries'))
            ->where($db->quoteName('event_date') . ' >= :startDate')
            ->bind(':startDate', $this->getState('filter.start_date'), ParameterType::STRING)
            ->order($db->escape($this->getState('list.ordering', 'event_date')) . ' ' . $db->escape($this->getState('list.direction', 'ASC')));

        return $query;
    }
}
