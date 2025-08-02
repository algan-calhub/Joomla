<?php

namespace Joomla\Component\Events\Administrator\Table;

use Joomla\CMS\Table\Table;
use Joomla\Database\DatabaseDriver;

class EventTable extends Table
{
    public function __construct(DatabaseDriver $db)
    {
        parent::__construct('#__evententries', 'id', $db);
    }
}
