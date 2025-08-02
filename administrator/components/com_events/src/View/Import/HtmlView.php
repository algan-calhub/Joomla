<?php

namespace Joomla\Component\Events\Administrator\View\Import;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

class HtmlView extends BaseHtmlView
{
    protected $form;

    public function display($tpl = null)
    {
        $this->form = $this->get('Form');
        parent::display($tpl);
    }
}
