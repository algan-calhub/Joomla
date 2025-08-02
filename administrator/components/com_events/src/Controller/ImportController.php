<?php

namespace Joomla\Component\Events\Administrator\Controller;

use Joomla\CMS\MVC\Controller\FormController;
use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\Session\Session;
use Joomla\CMS\Router\Route;

class ImportController extends FormController
{
    public function import()
    {
        Session::checkToken() or jexit(Text::_('JINVALID_TOKEN'));
        $file = $this->input->files->get('jform', [], 'array')['csvfile'] ?? null;

        if (!$file || $file['error'])
        {
            $this->setMessage(Text::_('COM_EVENTS_IMPORT_FAILED'), 'error');
            $this->setRedirect(Route::_('index.php?option=com_events&view=events', false));
            return false;
        }

        $db = Factory::getDbo();
        $handle = fopen($file['tmp_name'], 'r');

        while (($data = fgetcsv($handle, 1000, ',')) !== false)
        {
            $columns = [
                $db->quote($data[1]),
                $db->quote($data[0]),
                $db->quote($data[3] ?? null),
                $db->quote($data[4] ?? null),
                $db->quote($data[5] ?? null),
                $db->quote($data[2] ?? null),
                $db->quote($data[6] ?? null),
            ];

            $query = $db->getQuery(true)
                ->insert('#__evententries')
                ->columns(['title', 'event_date', 'start_time', 'end_time', 'location', 'description', 'extra_info'])
                ->values(implode(',', $columns));
            $db->setQuery($query);
            $db->execute();
        }

        fclose($handle);
        $this->setMessage(Text::_('COM_EVENTS_IMPORT_SUCCESS'));
        $this->setRedirect(Route::_('index.php?option=com_events&view=events', false));
        return true;
    }
}
