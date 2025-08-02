<?php

namespace Joomla\Component\Events\Administrator\Model;

use Joomla\CMS\MVC\Model\AdminModel;

class EventModel extends AdminModel
{
    protected $text_prefix = 'COM_EVENTS';

    public function getTable($type = 'Event', $prefix = 'Administrator\\Component\\Events\\Table', $config = [])
    {
        return parent::getTable($type, $prefix, $config);
    }

    protected function loadFormData()
    {
        $data = $this->getItem();
        return $data;
    }
}
